
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

### variations_sizes (sizes: s, l, xl, xxl)
    id, value
    status, created_at, updated_at

### variations_colors (color: black, white, blue)
    id, value
    status, created_at, updated_at

### variations_weights (weight: 10g, 100g, 10.5g)
    id, value
    status, created_at, updated_at

### product_variations (sizes: s, l, xl, xxl, color: black, white, blue weight: 10g, 20g)
    id, variation_size_id, variation_color_id, variation_weight_id
    status, created_at, updated_at

### products
    id, name, slug, image_id, sku, price, qty, description, information
    product_variation_id, tags (product_name, category_name, brand_name)
    status, created_at, updated_at

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
