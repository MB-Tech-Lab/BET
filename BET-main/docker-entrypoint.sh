#!/bin/bash
set -e

# Render passes the port in the PORT environment variable.
# Fallback to 80 if not set.
PORT=${PORT:-80}

# Update Apache to listen on the correct port
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/000-default.conf

# Execute the container's main process (Apache in foreground)
exec "$@"
