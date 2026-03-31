# Use official PHP + Apache image
FROM php:8.2-apache
<<<<<<< HEAD

# Copy all files into Apache web root
COPY . /var/www/html/

# Make sure Apache can read all files
RUN chmod -R 755 /var/www/html

# Enable mod_rewrite
RUN a2enmod rewrite

# Expose port 80
=======
COPY . /var/www/html/
RUN chmod -R 755 /var/www/html
RUN a2enmod rewrite
>>>>>>> d8fb1ca (Fix filenames and add Dockerfile)
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
