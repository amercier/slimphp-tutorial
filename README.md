# slimphp-tutorial
Slim PHP Framework Tutorial

Local setup
-----------

### Apache 2.4 (El Capitan)

In `/etc/hosts`:

```
127.0.0.1 slimphp-tutorial.local
```

In `/private/etc/apache2/extra/httpd-vhosts.conf`:

```httpdconf
<VirtualHost *:80>
    DocumentRoot "/Users/amercier/Workspace/slimphp-tutorial/src/public"
    ServerName slimphp-tutorial.local
    ErrorLog "/private/var/log/apache2/slimphp-tutorial_error.log"
    CustomLog "/private/var/log/apache2/slimphp-tutorial_access.log" common
</VirtualHost>
```

Restart Apache:

```
sudo apachectl -e info -k restart
```

Test using `curl http://slimphp-tutorial.local/`.
