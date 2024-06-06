# Use the official PHP image with Apache
FROM php:7.4-apache

# Copy the source code to the container
COPY src/ /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
