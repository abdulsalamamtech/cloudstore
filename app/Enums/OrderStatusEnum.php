<?php

namespace App\Enums;

enum OrderStatusEnum : string {
    case PENDING = 'pending';
    case CANCEL = 'cancel';
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case CLEARING = 'clearing';
    case DELIVERED = 'delivered';
    case COMPLETED = 'completed';
    case DECLINED = 'declined';
}
