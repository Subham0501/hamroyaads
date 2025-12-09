# Local Network Setup Guide

This guide will help you run your Laravel application on your local network so other devices can access it.

## Your Local IP Address
**192.168.1.91**

## Quick Start (Production Build)

1. **Build the assets:**
   ```bash
   npm run build
   ```

2. **Run the server:**
   ```bash
   ./serve-local.sh
   ```
   Or manually:
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
   ```

3. **Access from other devices:**
   - From your computer: `http://localhost:8000` or `http://192.168.1.91:8000`
   - From other devices on same network: `http://192.168.1.91:8000`

## Development Mode (with Hot Reload)

1. **Terminal 1 - Run Laravel:**
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
   ```

2. **Terminal 2 - Run Vite:**
   ```bash
   npm run dev
   ```

3. **Access from other devices:**
   - From your computer: `http://localhost:8000`
   - From other devices: `http://192.168.1.91:8000`
   - Note: Vite HMR (hot reload) may only work on your main computer

## Update .env File

Make sure your `.env` file has:
```env
APP_URL=http://192.168.1.91:8000
```

Or for localhost:
```env
APP_URL=http://localhost:8000
```

## Troubleshooting

1. **Firewall Issues:**
   - Make sure your firewall allows connections on port 8000
   - On macOS: System Settings > Network > Firewall

2. **Can't access from other devices:**
   - Make sure all devices are on the same Wi-Fi network
   - Check that your IP address is correct: `ifconfig | grep "inet "`

3. **Assets not loading:**
   - Make sure you've run `npm run build` for production
   - Or run `npm run dev` for development mode

## Stop the Server

Press `Ctrl + C` in the terminal where the server is running.
