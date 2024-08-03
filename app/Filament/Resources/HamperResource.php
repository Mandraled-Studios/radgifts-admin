<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Hamper;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HamperResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HamperResource\RelationManagers;

class HamperResource extends Resource
{
    protected static ?string $model = Hamper::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationGroup = 'Manage Hampers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make([
                    'default' => 1,
                    'md' => 6,
                ])
                ->schema([
                    Section::make()
                        ->description('')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(128),
                            Forms\Components\Textarea::make('excerpt')
                                ->required()
                                ->rows(3)
                                ->maxLength(255),
                            Forms\Components\RichEditor::make('hamper_description')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('usual_price')
                                ->numeric(),
                            Forms\Components\TextInput::make('offer_price')
                                ->numeric(),
                            Forms\Components\Toggle::make('is_active')
                                ->default(false),
                            Forms\Components\Toggle::make('has_variants')
                                ->default(false)
                                ->disabled()
                                ->dehydrated(),
                    ])->columnSpan(4),
                    Section::make()
                        ->description('')
                        ->schema([
                            Section::make('SEO')
                                ->description('')
                                ->schema([
                                    Forms\Components\TextInput::make('seo_title')
                                        ->maxLength(128)
                                        ->live(debounce: 500)
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                                return;
                                            }

                                            $set('slug', Str::slug($state));
                                        }),
                                    Forms\Components\TextInput::make('meta_description')
                                        ->maxLength(255),
                                    Forms\Components\TextInput::make('slug')
                                        ->required()
                                        ->maxLength(128),
                            ]),
                            Section::make('Media')
                                ->description('')
                                ->schema([
                                    Forms\Components\FileUpload::make('thumbnail')
                                        ->image()
                                        ->imageEditor()
                                        ->default('images/default-product-image.jpg'),
                                    CuratorPicker::make('media_id')
                                        ->label('Add Hamper Images')
                                        ->multiple()
                                        ->relationship('media', 'id')
                                    
                            ]),
                    ])->columnSpan(2),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->words(15)
                    ->wrap()
                    ->lineClamp(2),
                Tables\Columns\TextColumn::make('usual_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offer_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('corporate_hamper_flag')
                    ->boolean(),
                Tables\Columns\TextColumn::make('seo_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->words(15)
                    ->wrap()
                    ->lineClamp(2),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_variants')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHampers::route('/'),
            'create' => Pages\CreateHamper::route('/create'),
            'edit' => Pages\EditHamper::route('/{record}/edit'),
        ];
    }
}
