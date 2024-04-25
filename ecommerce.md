# DEVELOPED BY : ABDULSALAM AMTECH


## Database Tables

```php

    $table->id();
    $table->string('name');
    $table->decimal('price');
    $table->string('description');
    $table->string('information');
    $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
    // Status for active 1 as default
    $table->tinyInteger('status')->default(1);
    $table->timestamps();

```

### users
    name (username), email, password, is_admin, status, created_at, updated_at

### roles
    id, user_id, name, status, created_at, updated_at

### address
    id, first_name, last_name, email
    street_no, address_line1,
    postal_code (zip_code), phone_number,
    city, lga, state, country

### default_address
    id, user_id, address_id, is_default

### images
    id, type, file_id, url, data, status, created_at, updated_at

### brands
    id, name, image_id, status, created_at, updated_at

### categories
    id, name, image_id, parent_id, status, created_at, updated_at

### products
    id, name, image_id, sku, price, qty, description, status, created_at, updated_at

### product_tags
    id, product_id, tags (product_name, category_name, brand_name)

### wishlists
    id, user_id, product_id
### cart_items
    id, user_id, product_id, qty, status, created_at, updated_at

### payment_method
    id, name, provider (flutterwave, paystack, paypal), status

### shipping_method
    id, name, provider (dhl, ups), status

### order_status
    id, name (pending, processing, shipped, clearing, delivered)

### orders
    id, user_id, tracking_no, payment_method_id, shipping_method_id, 
    transaction_id, session_id, total_price, order_status_id,
    status, created_at, updated_at

### order_items
    id, user_id, order_id, product_id, price, qty, created_at, updated_at 

### reviews
    id, user_id, product_id, rating_value, comment



### coupons
    id, name, discount_rate start_date, end_date, status
### promotions
    id, name, description, start_date, end_date, status
### variations (sizes: s, l, xl, xxl, color: black, white, blue)
    id, sizes, colors
