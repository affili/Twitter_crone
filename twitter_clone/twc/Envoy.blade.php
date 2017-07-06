@servers(['web1' => '127.0.0.1', 'web2' => '127.0.0.1', 'web3' => '127.0.0.1'])

@task('deploy')
    cd /var/www/html
    git pull origin master
    composer
    artisan
@endtask

@finished
    echo "デプロイ終了";
@endfinished
