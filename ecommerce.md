
## DEVELOPED BY : ABDULSALAM AMTECH
## Modern CloudStore E-commerce Website


## Database Tables

```php

     php artisan make:model Product -m -c -r -R

```

```php

    $table->id();
    $table->string('name');
    $table->decimal('price', 10, 2);
    $table->string('description');
    $table->string('information');
    $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
    $table->foreignId('admin_id')->constrained('users','id')->cascadeOnDelete();
    // Automatically set foreign id user_id
    // This has a negative effect when change arise
    $table->foreignIdFor(User::class);
    // Status for active 1 as default
    $table->tinyInteger('status')->default(1);
    // Or
    $table->boolean('status')->default(true);
    $table->softDeletes();
    $table->timestamps();

```

### users
    name (username), email, password, is_admin, status, created_at, updated_at

### roles
    id, user_id, name, 
    status, created_at, updated_at

### address
    id, user_id, first_name, last_name, email
    street_no, address_line1, address_line2
    zip_code (postal_code), phone_number,
    lga (city), state, country (nigeria)
    status, created_at, updated_at

### default_address
    id, user_id, address_id, is_default
    status, created_at, updated_at

### images
    id, type, file_id, url, path, size, data, 
    status, created_at, updated_at

### brands
    id, name, image_id, 
    status, created_at, updated_at

### categories
    id, name, image_id, parent_id, 
    status, created_at, updated_at

### variation_sizes (sizes: s, l, xl, xxl)
    id, value
    status, created_at, updated_at

### variation_colors (color: black, white, blue)
    id, value
    status, created_at, updated_at

### variation_weights (weight: 10g, 100g, 10.5g)
    id, value
    status, created_at, updated_at


### products
    id, name, slug, image_id, sku, price, qty, description, information
    tags (product_name, category_name, brand_name)
    brand_id, category_id,
    status, created_at, updated_at


### product_variation_sizes (sizes: s, l, xl, xxl)
    id, product_id, variation_size_id, 
    created_at, updated_at
    
### product_variation_colors (color: black, white, blue)
    id, product_id, variation_color_id,
    created_at, updated_at

### product_variation_weight (weight: 10g, 20g)
    id, product_id, variation_weight_id,
     created_at, updated_at



// create its table
### product_images
    id, product_id, image_id
    status, created_at, updated_at


### wishlists
    id, user_id, product_id
    status, created_at, updated_at

### cart_items
    id, user_id, product_id, qty, 
    status, created_at, updated_at

### payment_method
    id, name, provider (flutterwave, paystack, paypal), 
    status, created_at, updated_at

### shipping_method
    id, name, provider (dhl, ups), 
    status, created_at, updated_at

### order_statuses
    id, order_status (pending, cancel, processing, shipped, clearing, delivered)
    status, created_at, updated_at

### orders
    id, user_id, tracking_no, payment_method_id, shipping_method_id, 
    transaction_id, session_id, total_price, order_status_id,
    status, created_at, updated_at

### order_items
    id, user_id, order_id, product_id, price, qty,
    status, created_at, updated_at

### reviews
    id, user_id, product_id, rating_value (1-5), comment
    status, created_at, updated_at

### coupons
    id, name, description, discount_rate start_date, end_date, 
    status, created_at, updated_at

### promotions
    id, name, description, discount_rate, start_date, end_date,
    status, created_at, updated_at





## Working with filament



Publish configuration files
```php

    php artisan vendor:publish --tag=filament-config

```

The model name = User, Product
- (--simple) Manage all your resource on one page
- (--generate) Generate the the form and table
- (--soft-delete) Add functionality to restore, force delete and filter trashed records in your resource
- (--view) Add view page to view resource

```php

   php artisan make:filament-resource User --generate --soft-deletes --view

```




## Navigation

```php

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?int $navigationSort = 1;
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Shop';

     public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', '=', 'processing')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::where('status', '=', 'processing')->count() > 10
            ? 'warning'
            : 'primary';
    }
    
    
    // Global Search
    protected static int $globalSearchResultsLimit = 20;
    protected static ?string $recordTitleAttribute = 'name';
    public static function getGloballySearchableAttributes(): array
    {
	return ['name', 'slug', 'description'];
    }
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['brand']);
    }
    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Brand' => $record->brand->name,
            'price' => $record->price,
        ];
    }
    
    
    
```


## Form 

Form Components

```php

    Forms\Columns\TextColumn::make('something')

        ->date()
        ->email()
        ->image()
        ->numeric()

        ->sortable()
        ->required()
        ->nullable()

        // disable and dehydrated helps to save the data
        ->disabled()
        ->dehydrated()

        ->searchable()
        ->default('ORD-' . random_int(100000, 9999999))
        ->unique(ignoreRecord: true)
        
        // trigger request when user is done with the field
        ->live(onBlur: true)
        ->dehydrated(),

    // Select
    Forms\Components\Select::make('customer_id')
        ->relationship('customer', 'name')
        ->searchable()
        // load first 50 items from relationship
        ->preload()
        ->required(),

    // Select multiple
    Forms\Components\Select::make('categories')
         ->relationship('categories', 'name')
         ->multiple()
         ->required(),
    
    // Selecting from enum class
    Forms\Components\Select::make('type')
        ->options([
            'pending' => OrderStatusEnum::PENDING->value,
            'processing' => OrderStatusEnum::PROCESSING->value,
            'completed' => OrderStatusEnum::COMPLETED->value,
            'declined' => OrderStatusEnum::DECLINED->value,
        ])->required(),

    // Input color
    Forms\Components\ColorPicker::make('primary_hex')
        ->label('Primary Color')

    // Text area
    Forms\Components\MarkdownEditor::make('description')
        ->columnSpan('full')

    // Input radio button
    Forms\Components\Toggle::make('is_visible')
        ->label('Visibility')
        ->helperText('Enable or disable brand visibility')
        ->default(true),

    // Set dynamic content
    Forms\Components\Placeholder::make('total_price')
        ->label('Total Price')
        ->content(function ($get) {
            return $get('quantity') * $get('unit_price');
        })
    Forms\Components\Select::make('product_id')
        ->label('Product')
        ->options(Product::query()->pluck('name', 'id'))
        ->required()
        ->reactive()
        ->afterStateUpdated(fn ($state, Forms\Set $set) =>
        $set('unit_price', Product::find($state)?->price ?? 0)),
    // Creating dynamic slug from name
    // #1
    // Name
    Forms\Components\TextInput::make('name')
        ->required()
        ->live(onBlur: true)
        ->unique()
        ->afterStateUpdated(function(string $operation, $state, Forms\Set $set) {
            if ($operation !== 'create') {
                return;
            }

            $set('slug', Str::slug($state));
        }),
    // Slug
    Forms\Components\TextInput::make('slug')
        ->disabled()
        ->dehydrated()
        ->required()
        ->unique(),
    # 2
    Forms\Components\TextInput::make('name')
        ->required()
        ->live(onBlur: true)
        ->unique()
        ->afterStateUpdated(function(string $operation, $state, Forms\Set $set) {
            if ($operation !== 'create') {
                return;
            }

            $set('slug', Str::slug($state));
        }),

    Forms\Components\TextInput::make('slug')
        ->disabled()
        ->dehydrated()
        ->required()
        ->unique(Product::class, 'slug', ignoreRecord: true),

```


Grouping Form Column

```php

return $form
    ->schema([

        Forms\Components\Group::make()
        ->schema([
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('username')
                    ->required(),
            ])->columns(1),
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\FileUpload::make('password')
                    ->label('Enter password ')
                    ->required(),
                Forms\Components\Toggle::make('confirm_password')
                    ->label('Confirm password')
                    ->required()
            ])->columns(1)
        ]),

        Forms\Components\Group::make()
        ->schema([
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('state')
                    ->required(),
            ])->columns(1),
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('country')
                    ->label('Country')
                    ->required(),
                Forms\Components\TextInput::make('nationality')
                    ->label('Nationality')
                    ->required()
            ])->columns(1)
        ]),
    ]);

```

Creating Steps

```php

    // Step 1
    Forms\Components\Wizard::make([
        Forms\Components\Wizard\Step::make('Order Details')
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->default('OR-' . random_int(100000, 9999999))
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                Forms\Components\Select::make('type')
                ->options([
                    'pending' => OrderStatusEnum::PENDING->value,
                    'processing' => OrderStatusEnum::PROCESSING->value,
                    'completed' => OrderStatusEnum::COMPLETED->value,
                    'declined' => OrderStatusEnum::DECLINED->value,
                ])->required(),

                Forms\Components\MarkdownEditor::make('notes')
                    ->columnSpanFull()
            ])->columns(2),
        // Step 2
        Forms\Components\Wizard\Step::make('Order Details')
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->default('OR-' . random_int(100000, 9999999))
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                Forms\Components\Select::make('type')
                ->options([
                    'pending' => OrderStatusEnum::PENDING->value,
                    'processing' => OrderStatusEnum::PROCESSING->value,
                    'completed' => OrderStatusEnum::COMPLETED->value,
                    'declined' => OrderStatusEnum::DECLINED->value,
                ])->required(),

                Forms\Components\MarkdownEditor::make('notes')
                    ->columnSpanFull()
            ])->columns(2),
    ]);
    
    
    
    
    
## Table

Grouping Table Columns

```php

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('slug'),
                ColumnGroup::make('Visibility', [
                    TextColumn::make('status'),
                    IconColumn::make('is_featured'),
                ]),
                TextColumn::make('author.name'),
            ]);
    }

```
