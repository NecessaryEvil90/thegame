FROM modera/php5-fpm:1.0

ENV PHP5_FPM_MAX_EXECUTION_TIME 3600
ENV PHP5_FPM_MAX_INPUT_TIME 3600

# All our dependencies, in alphabetical order (to ease maintenance)
RUN apt-get update && apt-get install -y --no-install-recommends \
        make \
        php-pear \
        php5-dev \
        php5-gd \
        python \
        python-software-properties \
        software-properties-common && \
        pecl install xdebug


RUN printf "zend_extension='/usr/lib/php5/20121212/xdebug.so'" > /etc/php5/fpm/conf.d/330-xdebug.ini
RUN printf "zend_extension='/usr/lib/php5/20121212/xdebug.so'" > /etc/php5/cli/conf.d/330-xdebug.ini


# Allow ssh-git to private repositories
ADD id_rsa /.ssh/id_rsa
RUN \
    echo "    IdentityFile /.ssh/id_rsa" >> /etc/ssh/ssh_config && \
    echo "    StrictHostKeyChecking no" >> /etc/ssh/ssh_config && \
    echo "    UserKnownHostsFile=/dev/null" >> /etc/ssh/ssh_config && \
    chmod go-rwx -R /.ssh
