# Use official PHP + Apache image
FROM php:8.2-apache

# Copy all files into Apache web root
COPY . /var/www/html/

# Make sure Apache can read all files
RUN chmod -R 755 /var/www/html

# Enable mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
