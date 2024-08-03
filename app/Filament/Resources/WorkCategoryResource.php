<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\WorkCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WorkCategoryResource\Pages;
use App\Filament\Resources\WorkCategoryResource\RelationManagers;

class WorkCategoryResource extends Resource
{
    protected static ?string $model = WorkCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationGroup = 'Our Works';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                        'default' => 1,
                        'md' => 6,
                    ])->schema([
                        Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(128),
                                Forms\Components\Textarea::make('excerpt')
                                    ->required()
                                    ->rows(3)
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Toggle::make('is_active')
                                    ->default(false),
                            ])
                            ->columnSpan(4),
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
                                            ->imageEditor()
                                            ->default('images/default-product-image.jpg'),
                                    ]),
                            ])
                            ->columnSpan(2),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
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
            'index' => Pages\ListWorkCategories::route('/'),
            'create' => Pages\CreateWorkCategory::route('/create'),
            'edit' => Pages\EditWorkCategory::route('/{record}/edit'),
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
