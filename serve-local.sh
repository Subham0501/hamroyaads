#!/bin/bash

# Laravel Local Network Server
# This script runs Laravel on your local network so other devices can access it

# Get local IP address
LOCAL_IP=$(ifconfig | grep "inet " | grep -v 127.0.0.1 | head -1 | awk '{print $2}')

echo "=========================================="
echo "Starting Laravel Server on Local Network"
echo "=========================================="
echo "Your local IP: $LOCAL_IP"
echo "Access from other devices: http://$LOCAL_IP:8000"
echo "=========================================="
echo ""

# Run Laravel server on all interfaces (0.0.0.0)
php artisan serve --host=0.0.0.0 --port=8000
