<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Collection;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CollectionResource\Pages;
use App\Filament\Resources\CollectionResource\RelationManagers;

class CollectionResource extends Resource
{
    protected static ?string $model = Collection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
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
                                ->maxLength(128)
                                ->columnSpanFull(),
                            Forms\Components\Textarea::make('excerpt')
                                ->required()
                                ->rows(3)
                                ->maxLength(255)
                                ->columnSpanFull(),
                            Forms\Components\RichEditor::make('collection_description')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\Toggle::make('corporate_hamper_flag')
                                ->label('Is this a corporate collection?')
                                ->default(true),
                            Forms\Components\Toggle::make('is_active'),
                            Forms\Components\Toggle::make('is_featured'),
                        ])->columnSpan(4),
                    Section::make()
                        ->schema([
                                    Section::make('SEO')
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
                                        ->schema([
                                            Forms\Components\FileUpload::make('thumbnail')
                                                ->image()
                                                ->imageEditor(),
                                        ]),
                        ])->columnSpan(2),
                ])->columns(6),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->label('Short Description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('seo_title')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('meta_description')
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCollections::route('/'),
            'create' => Pages\CreateCollection::route('/create'),
            'edit' => Pages\EditCollection::route('/{record}/edit'),
        ];
    }
}