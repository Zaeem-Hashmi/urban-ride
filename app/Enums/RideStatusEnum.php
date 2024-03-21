<?php
  
namespace App\Enums;
 
enum RideStatusEnum:string {
    case Requested = 'requested';
    case Accepted = 'accepted';
    case Completed = 'completed';
    case Canceled = 'canceled';
}