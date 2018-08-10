FROM debian:stretch-slim
RUN apt-get update && apt-get install -y \
  composer \
  php7.0 \
  php7.0-dom \
  php7.0-zip \
  unzip \
  && rm -rf /var/lib/apt/lists/*
RUN useradd -ms /bin/bash php7
WORKDIR /home/php7
USER php7
RUN composer require zendframework/zend-feed \
  zendframework/zend-http
COPY printheadlines.php ./
CMD ["php", "printheadlines.php"]
