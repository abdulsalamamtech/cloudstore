<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Brands;
use App\Models\Product;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Categories;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Actions\ActionGroup;
use Filament\Support\Colors\Color;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([

                                Section::make('Basic Info')
                                    ->schema([
                                        FileUpload::make('path')
                                            ->label('Product Image')
                                            ->required()
                                            ->image()
                                            ->imageEditor()
                                            ->imageCropAspectRatio('1:1')
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->maxFiles(1)
                                            ->columnSpan('full')
                                            ->helperText('Upload the main product image, this is what your customers will first notice'),

                                        TextInput::make('name')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                                    return;
                                                }

                                                $set('slug', Str::slug($state));
                                            })
                                            ->required(),
                                        TextInput::make('slug')
                                            // disable and dehydrated helps to save the data
                                            ->disabled()
                                            ->dehydrated()
                                            ->required()
                                            ->unique('products', 'slug', ignoreRecord: true),
                                        Section::make()
                                            ->schema([
                                                TextInput::make('qty')
                                                    ->numeric()
                                                    ->default(0)
                                                    ->columns(2),
                                                TextInput::make('price')
                                                    ->numeric()
                                                    ->default(0)
                                                    ->prefix('₦'),
                                            ])->columns(2),
                                        Textarea::make('description')
                                            ->required()
                                            ->columnSpanFull(),
                                        Toggle::make('status')
                                            ->required()
                                            ->default(true)
                                            ->helperText('Publish this product'),
                                    ])->collapsible(),
                            ])
                    ]),


                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Section::make('Association')
                                    ->schema([
                                        Select::make('brand_id')
                                            ->label('Select Brand')
                                            ->relationship('brand', 'name')
                                            // ->options(Brands::all()->pluck('name', 'id'))
                                            ->preload()
                                            ->searchable()
                                            ->required(),
                                        Select::make('category_id')
                                            ->label('Select category')
                                            ->relationship('category', 'name')
                                            ->preload()
                                            ->searchable()
                                            ->nullable(),
                                    ])->collapsible(),
                                Section::make('Variations')
                                    ->schema([
                                        Select::make('color')
                                            ->relationship('productVariationColors', 'value')
                                            ->required()
                                            ->multiple()
                                            ->searchable()
                                            ->preload()
                                            ->createOptionForm([
                                                ColorPicker::make('value')
                                                    ->required()
                                            ]),
                                        Select::make('productVariationSizes')
                                            ->relationship('productVariationSizes', 'value')
                                            ->required()
                                            ->multiple()
                                            ->searchable()
                                            ->preload()
                                            ->createOptionForm([
                                                TextInput::make('value')
                                                    ->helperText('s, x, xl, xxl')
                                                    ->required()
                                        ]),
                                        Select::make('productVariationWeights')
                                            ->relationship('productVariationWeights', 'value')
                                            ->required()
                                            ->prefix('gram (g)')
                                            ->searchable()
                                            ->preload()
                                            ->helperText('helps in calculating shipping fee')
                                            ->createOptionForm([
                                                TextInput::make('value')
                                                    ->prefix('gram (g)')
                                                    ->helperText('Gram(g): 10, 15, 20')
                                                    ->numeric()
                                                    ->required(),
                                            ]),
                                    ])->collapsible(),
                            ])
                    ]),


                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Section::make('Product Information')
                                    ->schema([
                                        RichEditor::make('information')
                                            ->label('Product information')
                                            ->nullable()
                                            ->helperText('Write about the uniqueness of the product you want your customers to know about'),
                                    ])->collapsible()->collapsed(),
                                Section::make('Product Images')
                                    ->schema([
                                        FileUpload::make('images')
                                            ->nullable()
                                            ->image()
                                            ->multiple()
                                            ->imageEditor()
                                            ->imageCropAspectRatio('1:1')
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->maxFiles(5)
                                            ->helperText('You can upload upto 5 different variations of this product'),
                                    ])->collapsible()->collapsed(),
                            ]),
                    ])->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image.path')
                    ->square(),
                Tables\Columns\TextColumn::make('qty')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tags')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
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
