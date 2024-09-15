<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Work;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WorkResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WorkResource\RelationManagers;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;
    protected static ?string $navigationIcon = 'heroicon-o-gift-top';
    protected static ?string $navigationGroup = 'Our Works';
    protected static ?int $navigationSort = 2;

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
                                ->maxLength(255),
                            Forms\Components\RichEditor::make('description')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\TagsInput::make('box_contents')
                                ->nullable(),
                            Forms\Components\Toggle::make('is_active')
                                ->required(),
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
                                        ->label("Client's Logo")
                                        ->image()
                                        ->imageEditor()
                                        ->default('images/default-product-image.jpg'),
                                    CuratorPicker::make('media_id')
                                        ->label('Add Work Images')
                                        ->multiple()
                                        ->relationship('media', 'id')
                                ]),
                        ])->columnSpan(2),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->words(15)
                    ->wrap()
                    ->lineClamp(2)
                    ->searchable(),
                Tables\Columns\TextColumn::make('seo_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
