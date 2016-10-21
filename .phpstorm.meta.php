<?php
namespace PHPSTORM_META {

   /**
    * PhpStorm Meta file, to provide autocomplete information for PhpStorm
    * Generated on 2016-10-19.
    *
    * @author Barry vd. Heuvel <barryvdh@gmail.com>
    * @see https://github.com/barryvdh/laravel-ide-helper
    */
    $STATIC_METHOD_TYPES = [
        new \Illuminate\Contracts\Container\Container => [
            '' == '@',
            'events' instanceof \Illuminate\Events\Dispatcher,
            'router' instanceof \Illuminate\Routing\Router,
            'url' instanceof \Illuminate\Routing\UrlGenerator,
            'redirect' instanceof \Illuminate\Routing\Redirector,
            'Illuminate\Contracts\Routing\ResponseFactory' instanceof \Illuminate\Routing\ResponseFactory,
            'Illuminate\Contracts\Http\Kernel' instanceof \App\Http\Kernel,
            'Illuminate\Contracts\Console\Kernel' instanceof \App\Console\Kernel,
            'Illuminate\Contracts\Debug\ExceptionHandler' instanceof \App\Exceptions\Handler,
            'auth' instanceof \Illuminate\Auth\AuthManager,
            'auth.driver' instanceof \Illuminate\Auth\SessionGuard,
            'Illuminate\Contracts\Auth\Access\Gate' instanceof \Illuminate\Auth\Access\Gate,
            'cookie' instanceof \Illuminate\Cookie\CookieJar,
            'Illuminate\Contracts\Queue\EntityResolver' instanceof \Illuminate\Database\Eloquent\QueueEntityResolver,
            'db.factory' instanceof \Illuminate\Database\Connectors\ConnectionFactory,
            'db' instanceof \Illuminate\Database\DatabaseManager,
            'db.connection' instanceof \Jenssegers\Mongodb\Connection,
            'files' instanceof \Illuminate\Filesystem\Filesystem,
            'filesystem' instanceof \Illuminate\Filesystem\FilesystemManager,
            'filesystem.disk' instanceof \Illuminate\Filesystem\FilesystemAdapter,
            'Illuminate\Notifications\ChannelManager' instanceof \Illuminate\Notifications\ChannelManager,
            'session' instanceof \Illuminate\Session\SessionManager,
            'session.store' instanceof \Illuminate\Session\Store,
            'Illuminate\Session\Middleware\StartSession' instanceof \Illuminate\Session\Middleware\StartSession,
            'view.engine.resolver' instanceof \Illuminate\View\Engines\EngineResolver,
            'view.finder' instanceof \Illuminate\View\FileViewFinder,
            'view' instanceof \Illuminate\View\Factory,
            'Thujohn\Twitter\Twitter' instanceof \Thujohn\Twitter\Twitter,
            'blade.compiler' instanceof \Illuminate\View\Compilers\BladeCompiler,
            'Illuminate\Broadcasting\BroadcastManager' instanceof \Illuminate\Broadcasting\BroadcastManager,
            'Illuminate\Contracts\Broadcasting\Broadcaster' instanceof \Illuminate\Broadcasting\Broadcasters\LogBroadcaster,
            'Illuminate\Bus\Dispatcher' instanceof \Illuminate\Bus\Dispatcher,
            'cache' instanceof \Illuminate\Cache\CacheManager,
            'cache.store' instanceof \Illuminate\Cache\Repository,
            'memcached.connector' instanceof \Illuminate\Cache\MemcachedConnector,
            'command.cache.clear' instanceof \Illuminate\Cache\Console\ClearCommand,
            'command.clear-compiled' instanceof \Illuminate\Foundation\Console\ClearCompiledCommand,
            'command.auth.resets.clear' instanceof \Illuminate\Auth\Console\ClearResetsCommand,
            'command.config.cache' instanceof \Illuminate\Foundation\Console\ConfigCacheCommand,
            'command.config.clear' instanceof \Illuminate\Foundation\Console\ConfigClearCommand,
            'command.down' instanceof \Illuminate\Foundation\Console\DownCommand,
            'command.environment' instanceof \Illuminate\Foundation\Console\EnvironmentCommand,
            'command.key.generate' instanceof \Illuminate\Foundation\Console\KeyGenerateCommand,
            'command.optimize' instanceof \Illuminate\Foundation\Console\OptimizeCommand,
            'command.route.cache' instanceof \Illuminate\Foundation\Console\RouteCacheCommand,
            'command.route.clear' instanceof \Illuminate\Foundation\Console\RouteClearCommand,
            'command.route.list' instanceof \Illuminate\Foundation\Console\RouteListCommand,
            'command.storage.link' instanceof \Illuminate\Foundation\Console\StorageLinkCommand,
            'command.tinker' instanceof \Illuminate\Foundation\Console\TinkerCommand,
            'command.up' instanceof \Illuminate\Foundation\Console\UpCommand,
            'command.view.clear' instanceof \Illuminate\Foundation\Console\ViewClearCommand,
            'command.app.name' instanceof \Illuminate\Foundation\Console\AppNameCommand,
            'command.auth.make' instanceof \Illuminate\Auth\Console\MakeAuthCommand,
            'command.cache.table' instanceof \Illuminate\Cache\Console\CacheTableCommand,
            'command.console.make' instanceof \Illuminate\Foundation\Console\ConsoleMakeCommand,
            'command.controller.make' instanceof \Illuminate\Routing\Console\ControllerMakeCommand,
            'command.event.generate' instanceof \Illuminate\Foundation\Console\EventGenerateCommand,
            'command.event.make' instanceof \Illuminate\Foundation\Console\EventMakeCommand,
            'command.job.make' instanceof \Illuminate\Foundation\Console\JobMakeCommand,
            'command.listener.make' instanceof \Illuminate\Foundation\Console\ListenerMakeCommand,
            'command.mail.make' instanceof \Illuminate\Foundation\Console\MailMakeCommand,
            'command.middleware.make' instanceof \Illuminate\Routing\Console\MiddlewareMakeCommand,
            'command.model.make' instanceof \Illuminate\Foundation\Console\ModelMakeCommand,
            'command.notification.make' instanceof \Illuminate\Foundation\Console\NotificationMakeCommand,
            'command.notification.table' instanceof \Illuminate\Notifications\Console\NotificationTableCommand,
            'command.policy.make' instanceof \Illuminate\Foundation\Console\PolicyMakeCommand,
            'command.provider.make' instanceof \Illuminate\Foundation\Console\ProviderMakeCommand,
            'command.queue.failed-table' instanceof \Illuminate\Queue\Console\FailedTableCommand,
            'command.queue.table' instanceof \Illuminate\Queue\Console\TableCommand,
            'command.request.make' instanceof \Illuminate\Foundation\Console\RequestMakeCommand,
            'command.seeder.make' instanceof \Illuminate\Database\Console\Seeds\SeederMakeCommand,
            'command.session.table' instanceof \Illuminate\Session\Console\SessionTableCommand,
            'command.serve' instanceof \Illuminate\Foundation\Console\ServeCommand,
            'command.test.make' instanceof \Illuminate\Foundation\Console\TestMakeCommand,
            'command.vendor.publish' instanceof \Illuminate\Foundation\Console\VendorPublishCommand,
            'migration.repository' instanceof \Illuminate\Database\Migrations\DatabaseMigrationRepository,
            'migrator' instanceof \Illuminate\Database\Migrations\Migrator,
            'migration.creator' instanceof \Illuminate\Database\Migrations\MigrationCreator,
            'command.migrate' instanceof \Illuminate\Database\Console\Migrations\MigrateCommand,
            'command.migrate.rollback' instanceof \Illuminate\Database\Console\Migrations\RollbackCommand,
            'command.migrate.reset' instanceof \Illuminate\Database\Console\Migrations\ResetCommand,
            'command.migrate.refresh' instanceof \Illuminate\Database\Console\Migrations\RefreshCommand,
            'command.migrate.install' instanceof \Illuminate\Database\Console\Migrations\InstallCommand,
            'command.migrate.make' instanceof \Illuminate\Database\Console\Migrations\MigrateMakeCommand,
            'command.migrate.status' instanceof \Illuminate\Database\Console\Migrations\StatusCommand,
            'command.seed' instanceof \Illuminate\Database\Console\Seeds\SeedCommand,
            'composer' instanceof \Illuminate\Support\Composer,
            'command.queue.failed' instanceof \Illuminate\Queue\Console\ListFailedCommand,
            'command.queue.retry' instanceof \Illuminate\Queue\Console\RetryCommand,
            'command.queue.forget' instanceof \Illuminate\Queue\Console\ForgetFailedCommand,
            'command.queue.flush' instanceof \Illuminate\Queue\Console\FlushFailedCommand,
            'hash' instanceof \Illuminate\Hashing\BcryptHasher,
            'swift.transport' instanceof \Illuminate\Mail\TransportManager,
            'swift.mailer' instanceof \Swift_Mailer,
            'mailer' instanceof \Illuminate\Mail\Mailer,
            'Illuminate\Contracts\Pipeline\Hub' instanceof \Illuminate\Pipeline\Hub,
            'queue' instanceof \Illuminate\Queue\QueueManager,
            'queue.connection' instanceof \Illuminate\Queue\SyncQueue,
            'command.queue.work' instanceof \Illuminate\Queue\Console\WorkCommand,
            'command.queue.restart' instanceof \Illuminate\Queue\Console\RestartCommand,
            'queue.worker' instanceof \Illuminate\Queue\Worker,
            'command.queue.listen' instanceof \Illuminate\Queue\Console\ListenCommand,
            'queue.listener' instanceof \Illuminate\Queue\Listener,
            'queue.failer' instanceof \Illuminate\Queue\Failed\DatabaseFailedJobProvider,
            'auth.password' instanceof \Illuminate\Auth\Passwords\PasswordBrokerManager,
            'auth.password.broker' instanceof \Illuminate\Auth\Passwords\PasswordBroker,
            'translation.loader' instanceof \Illuminate\Translation\FileLoader,
            'translator' instanceof \Illuminate\Translation\Translator,
            'validation.presence' instanceof \Illuminate\Validation\DatabasePresenceVerifier,
            'command.ide-helper.generate' instanceof \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand,
            'command.ide-helper.models' instanceof \Barryvdh\LaravelIdeHelper\Console\ModelsCommand,
            'command.ide-helper.meta' instanceof \Barryvdh\LaravelIdeHelper\Console\MetaCommand,
        ],
        \Illuminate\Contracts\Container\Container::make('') => [
            '' == '@',
            'events' instanceof \Illuminate\Events\Dispatcher,
            'router' instanceof \Illuminate\Routing\Router,
            'url' instanceof \Illuminate\Routing\UrlGenerator,
            'redirect' instanceof \Illuminate\Routing\Redirector,
            'Illuminate\Contracts\Routing\ResponseFactory' instanceof \Illuminate\Routing\ResponseFactory,
            'Illuminate\Contracts\Http\Kernel' instanceof \App\Http\Kernel,
            'Illuminate\Contracts\Console\Kernel' instanceof \App\Console\Kernel,
            'Illuminate\Contracts\Debug\ExceptionHandler' instanceof \App\Exceptions\Handler,
            'auth' instanceof \Illuminate\Auth\AuthManager,
            'auth.driver' instanceof \Illuminate\Auth\SessionGuard,
            'Illuminate\Contracts\Auth\Access\Gate' instanceof \Illuminate\Auth\Access\Gate,
            'cookie' instanceof \Illuminate\Cookie\CookieJar,
            'Illuminate\Contracts\Queue\EntityResolver' instanceof \Illuminate\Database\Eloquent\QueueEntityResolver,
            'db.factory' instanceof \Illuminate\Database\Connectors\ConnectionFactory,
            'db' instanceof \Illuminate\Database\DatabaseManager,
            'db.connection' instanceof \Jenssegers\Mongodb\Connection,
            'files' instanceof \Illuminate\Filesystem\Filesystem,
            'filesystem' instanceof \Illuminate\Filesystem\FilesystemManager,
            'filesystem.disk' instanceof \Illuminate\Filesystem\FilesystemAdapter,
            'Illuminate\Notifications\ChannelManager' instanceof \Illuminate\Notifications\ChannelManager,
            'session' instanceof \Illuminate\Session\SessionManager,
            'session.store' instanceof \Illuminate\Session\Store,
            'Illuminate\Session\Middleware\StartSession' instanceof \Illuminate\Session\Middleware\StartSession,
            'view.engine.resolver' instanceof \Illuminate\View\Engines\EngineResolver,
            'view.finder' instanceof \Illuminate\View\FileViewFinder,
            'view' instanceof \Illuminate\View\Factory,
            'Thujohn\Twitter\Twitter' instanceof \Thujohn\Twitter\Twitter,
            'blade.compiler' instanceof \Illuminate\View\Compilers\BladeCompiler,
            'Illuminate\Broadcasting\BroadcastManager' instanceof \Illuminate\Broadcasting\BroadcastManager,
            'Illuminate\Contracts\Broadcasting\Broadcaster' instanceof \Illuminate\Broadcasting\Broadcasters\LogBroadcaster,
            'Illuminate\Bus\Dispatcher' instanceof \Illuminate\Bus\Dispatcher,
            'cache' instanceof \Illuminate\Cache\CacheManager,
            'cache.store' instanceof \Illuminate\Cache\Repository,
            'memcached.connector' instanceof \Illuminate\Cache\MemcachedConnector,
            'command.cache.clear' instanceof \Illuminate\Cache\Console\ClearCommand,
            'command.clear-compiled' instanceof \Illuminate\Foundation\Console\ClearCompiledCommand,
            'command.auth.resets.clear' instanceof \Illuminate\Auth\Console\ClearResetsCommand,
            'command.config.cache' instanceof \Illuminate\Foundation\Console\ConfigCacheCommand,
            'command.config.clear' instanceof \Illuminate\Foundation\Console\ConfigClearCommand,
            'command.down' instanceof \Illuminate\Foundation\Console\DownCommand,
            'command.environment' instanceof \Illuminate\Foundation\Console\EnvironmentCommand,
            'command.key.generate' instanceof \Illuminate\Foundation\Console\KeyGenerateCommand,
            'command.optimize' instanceof \Illuminate\Foundation\Console\OptimizeCommand,
            'command.route.cache' instanceof \Illuminate\Foundation\Console\RouteCacheCommand,
            'command.route.clear' instanceof \Illuminate\Foundation\Console\RouteClearCommand,
            'command.route.list' instanceof \Illuminate\Foundation\Console\RouteListCommand,
            'command.storage.link' instanceof \Illuminate\Foundation\Console\StorageLinkCommand,
            'command.tinker' instanceof \Illuminate\Foundation\Console\TinkerCommand,
            'command.up' instanceof \Illuminate\Foundation\Console\UpCommand,
            'command.view.clear' instanceof \Illuminate\Foundation\Console\ViewClearCommand,
            'command.app.name' instanceof \Illuminate\Foundation\Console\AppNameCommand,
            'command.auth.make' instanceof \Illuminate\Auth\Console\MakeAuthCommand,
            'command.cache.table' instanceof \Illuminate\Cache\Console\CacheTableCommand,
            'command.console.make' instanceof \Illuminate\Foundation\Console\ConsoleMakeCommand,
            'command.controller.make' instanceof \Illuminate\Routing\Console\ControllerMakeCommand,
            'command.event.generate' instanceof \Illuminate\Foundation\Console\EventGenerateCommand,
            'command.event.make' instanceof \Illuminate\Foundation\Console\EventMakeCommand,
            'command.job.make' instanceof \Illuminate\Foundation\Console\JobMakeCommand,
            'command.listener.make' instanceof \Illuminate\Foundation\Console\ListenerMakeCommand,
            'command.mail.make' instanceof \Illuminate\Foundation\Console\MailMakeCommand,
            'command.middleware.make' instanceof \Illuminate\Routing\Console\MiddlewareMakeCommand,
            'command.model.make' instanceof \Illuminate\Foundation\Console\ModelMakeCommand,
            'command.notification.make' instanceof \Illuminate\Foundation\Console\NotificationMakeCommand,
            'command.notification.table' instanceof \Illuminate\Notifications\Console\NotificationTableCommand,
            'command.policy.make' instanceof \Illuminate\Foundation\Console\PolicyMakeCommand,
            'command.provider.make' instanceof \Illuminate\Foundation\Console\ProviderMakeCommand,
            'command.queue.failed-table' instanceof \Illuminate\Queue\Console\FailedTableCommand,
            'command.queue.table' instanceof \Illuminate\Queue\Console\TableCommand,
            'command.request.make' instanceof \Illuminate\Foundation\Console\RequestMakeCommand,
            'command.seeder.make' instanceof \Illuminate\Database\Console\Seeds\SeederMakeCommand,
            'command.session.table' instanceof \Illuminate\Session\Console\SessionTableCommand,
            'command.serve' instanceof \Illuminate\Foundation\Console\ServeCommand,
            'command.test.make' instanceof \Illuminate\Foundation\Console\TestMakeCommand,
            'command.vendor.publish' instanceof \Illuminate\Foundation\Console\VendorPublishCommand,
            'migration.repository' instanceof \Illuminate\Database\Migrations\DatabaseMigrationRepository,
            'migrator' instanceof \Illuminate\Database\Migrations\Migrator,
            'migration.creator' instanceof \Illuminate\Database\Migrations\MigrationCreator,
            'command.migrate' instanceof \Illuminate\Database\Console\Migrations\MigrateCommand,
            'command.migrate.rollback' instanceof \Illuminate\Database\Console\Migrations\RollbackCommand,
            'command.migrate.reset' instanceof \Illuminate\Database\Console\Migrations\ResetCommand,
            'command.migrate.refresh' instanceof \Illuminate\Database\Console\Migrations\RefreshCommand,
            'command.migrate.install' instanceof \Illuminate\Database\Console\Migrations\InstallCommand,
            'command.migrate.make' instanceof \Illuminate\Database\Console\Migrations\MigrateMakeCommand,
            'command.migrate.status' instanceof \Illuminate\Database\Console\Migrations\StatusCommand,
            'command.seed' instanceof \Illuminate\Database\Console\Seeds\SeedCommand,
            'composer' instanceof \Illuminate\Support\Composer,
            'command.queue.failed' instanceof \Illuminate\Queue\Console\ListFailedCommand,
            'command.queue.retry' instanceof \Illuminate\Queue\Console\RetryCommand,
            'command.queue.forget' instanceof \Illuminate\Queue\Console\ForgetFailedCommand,
            'command.queue.flush' instanceof \Illuminate\Queue\Console\FlushFailedCommand,
            'hash' instanceof \Illuminate\Hashing\BcryptHasher,
            'swift.transport' instanceof \Illuminate\Mail\TransportManager,
            'swift.mailer' instanceof \Swift_Mailer,
            'mailer' instanceof \Illuminate\Mail\Mailer,
            'Illuminate\Contracts\Pipeline\Hub' instanceof \Illuminate\Pipeline\Hub,
            'queue' instanceof \Illuminate\Queue\QueueManager,
            'queue.connection' instanceof \Illuminate\Queue\SyncQueue,
            'command.queue.work' instanceof \Illuminate\Queue\Console\WorkCommand,
            'command.queue.restart' instanceof \Illuminate\Queue\Console\RestartCommand,
            'queue.worker' instanceof \Illuminate\Queue\Worker,
            'command.queue.listen' instanceof \Illuminate\Queue\Console\ListenCommand,
            'queue.listener' instanceof \Illuminate\Queue\Listener,
            'queue.failer' instanceof \Illuminate\Queue\Failed\DatabaseFailedJobProvider,
            'auth.password' instanceof \Illuminate\Auth\Passwords\PasswordBrokerManager,
            'auth.password.broker' instanceof \Illuminate\Auth\Passwords\PasswordBroker,
            'translation.loader' instanceof \Illuminate\Translation\FileLoader,
            'translator' instanceof \Illuminate\Translation\Translator,
            'validation.presence' instanceof \Illuminate\Validation\DatabasePresenceVerifier,
            'command.ide-helper.generate' instanceof \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand,
            'command.ide-helper.models' instanceof \Barryvdh\LaravelIdeHelper\Console\ModelsCommand,
            'command.ide-helper.meta' instanceof \Barryvdh\LaravelIdeHelper\Console\MetaCommand,
        ],
        \App::make('') => [
            '' == '@',
            'events' instanceof \Illuminate\Events\Dispatcher,
            'router' instanceof \Illuminate\Routing\Router,
            'url' instanceof \Illuminate\Routing\UrlGenerator,
            'redirect' instanceof \Illuminate\Routing\Redirector,
            'Illuminate\Contracts\Routing\ResponseFactory' instanceof \Illuminate\Routing\ResponseFactory,
            'Illuminate\Contracts\Http\Kernel' instanceof \App\Http\Kernel,
            'Illuminate\Contracts\Console\Kernel' instanceof \App\Console\Kernel,
            'Illuminate\Contracts\Debug\ExceptionHandler' instanceof \App\Exceptions\Handler,
            'auth' instanceof \Illuminate\Auth\AuthManager,
            'auth.driver' instanceof \Illuminate\Auth\SessionGuard,
            'Illuminate\Contracts\Auth\Access\Gate' instanceof \Illuminate\Auth\Access\Gate,
            'cookie' instanceof \Illuminate\Cookie\CookieJar,
            'Illuminate\Contracts\Queue\EntityResolver' instanceof \Illuminate\Database\Eloquent\QueueEntityResolver,
            'db.factory' instanceof \Illuminate\Database\Connectors\ConnectionFactory,
            'db' instanceof \Illuminate\Database\DatabaseManager,
            'db.connection' instanceof \Jenssegers\Mongodb\Connection,
            'files' instanceof \Illuminate\Filesystem\Filesystem,
            'filesystem' instanceof \Illuminate\Filesystem\FilesystemManager,
            'filesystem.disk' instanceof \Illuminate\Filesystem\FilesystemAdapter,
            'Illuminate\Notifications\ChannelManager' instanceof \Illuminate\Notifications\ChannelManager,
            'session' instanceof \Illuminate\Session\SessionManager,
            'session.store' instanceof \Illuminate\Session\Store,
            'Illuminate\Session\Middleware\StartSession' instanceof \Illuminate\Session\Middleware\StartSession,
            'view.engine.resolver' instanceof \Illuminate\View\Engines\EngineResolver,
            'view.finder' instanceof \Illuminate\View\FileViewFinder,
            'view' instanceof \Illuminate\View\Factory,
            'Thujohn\Twitter\Twitter' instanceof \Thujohn\Twitter\Twitter,
            'blade.compiler' instanceof \Illuminate\View\Compilers\BladeCompiler,
            'Illuminate\Broadcasting\BroadcastManager' instanceof \Illuminate\Broadcasting\BroadcastManager,
            'Illuminate\Contracts\Broadcasting\Broadcaster' instanceof \Illuminate\Broadcasting\Broadcasters\LogBroadcaster,
            'Illuminate\Bus\Dispatcher' instanceof \Illuminate\Bus\Dispatcher,
            'cache' instanceof \Illuminate\Cache\CacheManager,
            'cache.store' instanceof \Illuminate\Cache\Repository,
            'memcached.connector' instanceof \Illuminate\Cache\MemcachedConnector,
            'command.cache.clear' instanceof \Illuminate\Cache\Console\ClearCommand,
            'command.clear-compiled' instanceof \Illuminate\Foundation\Console\ClearCompiledCommand,
            'command.auth.resets.clear' instanceof \Illuminate\Auth\Console\ClearResetsCommand,
            'command.config.cache' instanceof \Illuminate\Foundation\Console\ConfigCacheCommand,
            'command.config.clear' instanceof \Illuminate\Foundation\Console\ConfigClearCommand,
            'command.down' instanceof \Illuminate\Foundation\Console\DownCommand,
            'command.environment' instanceof \Illuminate\Foundation\Console\EnvironmentCommand,
            'command.key.generate' instanceof \Illuminate\Foundation\Console\KeyGenerateCommand,
            'command.optimize' instanceof \Illuminate\Foundation\Console\OptimizeCommand,
            'command.route.cache' instanceof \Illuminate\Foundation\Console\RouteCacheCommand,
            'command.route.clear' instanceof \Illuminate\Foundation\Console\RouteClearCommand,
            'command.route.list' instanceof \Illuminate\Foundation\Console\RouteListCommand,
            'command.storage.link' instanceof \Illuminate\Foundation\Console\StorageLinkCommand,
            'command.tinker' instanceof \Illuminate\Foundation\Console\TinkerCommand,
            'command.up' instanceof \Illuminate\Foundation\Console\UpCommand,
            'command.view.clear' instanceof \Illuminate\Foundation\Console\ViewClearCommand,
            'command.app.name' instanceof \Illuminate\Foundation\Console\AppNameCommand,
            'command.auth.make' instanceof \Illuminate\Auth\Console\MakeAuthCommand,
            'command.cache.table' instanceof \Illuminate\Cache\Console\CacheTableCommand,
            'command.console.make' instanceof \Illuminate\Foundation\Console\ConsoleMakeCommand,
            'command.controller.make' instanceof \Illuminate\Routing\Console\ControllerMakeCommand,
            'command.event.generate' instanceof \Illuminate\Foundation\Console\EventGenerateCommand,
            'command.event.make' instanceof \Illuminate\Foundation\Console\EventMakeCommand,
            'command.job.make' instanceof \Illuminate\Foundation\Console\JobMakeCommand,
            'command.listener.make' instanceof \Illuminate\Foundation\Console\ListenerMakeCommand,
            'command.mail.make' instanceof \Illuminate\Foundation\Console\MailMakeCommand,
            'command.middleware.make' instanceof \Illuminate\Routing\Console\MiddlewareMakeCommand,
            'command.model.make' instanceof \Illuminate\Foundation\Console\ModelMakeCommand,
            'command.notification.make' instanceof \Illuminate\Foundation\Console\NotificationMakeCommand,
            'command.notification.table' instanceof \Illuminate\Notifications\Console\NotificationTableCommand,
            'command.policy.make' instanceof \Illuminate\Foundation\Console\PolicyMakeCommand,
            'command.provider.make' instanceof \Illuminate\Foundation\Console\ProviderMakeCommand,
            'command.queue.failed-table' instanceof \Illuminate\Queue\Console\FailedTableCommand,
            'command.queue.table' instanceof \Illuminate\Queue\Console\TableCommand,
            'command.request.make' instanceof \Illuminate\Foundation\Console\RequestMakeCommand,
            'command.seeder.make' instanceof \Illuminate\Database\Console\Seeds\SeederMakeCommand,
            'command.session.table' instanceof \Illuminate\Session\Console\SessionTableCommand,
            'command.serve' instanceof \Illuminate\Foundation\Console\ServeCommand,
            'command.test.make' instanceof \Illuminate\Foundation\Console\TestMakeCommand,
            'command.vendor.publish' instanceof \Illuminate\Foundation\Console\VendorPublishCommand,
            'migration.repository' instanceof \Illuminate\Database\Migrations\DatabaseMigrationRepository,
            'migrator' instanceof \Illuminate\Database\Migrations\Migrator,
            'migration.creator' instanceof \Illuminate\Database\Migrations\MigrationCreator,
            'command.migrate' instanceof \Illuminate\Database\Console\Migrations\MigrateCommand,
            'command.migrate.rollback' instanceof \Illuminate\Database\Console\Migrations\RollbackCommand,
            'command.migrate.reset' instanceof \Illuminate\Database\Console\Migrations\ResetCommand,
            'command.migrate.refresh' instanceof \Illuminate\Database\Console\Migrations\RefreshCommand,
            'command.migrate.install' instanceof \Illuminate\Database\Console\Migrations\InstallCommand,
            'command.migrate.make' instanceof \Illuminate\Database\Console\Migrations\MigrateMakeCommand,
            'command.migrate.status' instanceof \Illuminate\Database\Console\Migrations\StatusCommand,
            'command.seed' instanceof \Illuminate\Database\Console\Seeds\SeedCommand,
            'composer' instanceof \Illuminate\Support\Composer,
            'command.queue.failed' instanceof \Illuminate\Queue\Console\ListFailedCommand,
            'command.queue.retry' instanceof \Illuminate\Queue\Console\RetryCommand,
            'command.queue.forget' instanceof \Illuminate\Queue\Console\ForgetFailedCommand,
            'command.queue.flush' instanceof \Illuminate\Queue\Console\FlushFailedCommand,
            'hash' instanceof \Illuminate\Hashing\BcryptHasher,
            'swift.transport' instanceof \Illuminate\Mail\TransportManager,
            'swift.mailer' instanceof \Swift_Mailer,
            'mailer' instanceof \Illuminate\Mail\Mailer,
            'Illuminate\Contracts\Pipeline\Hub' instanceof \Illuminate\Pipeline\Hub,
            'queue' instanceof \Illuminate\Queue\QueueManager,
            'queue.connection' instanceof \Illuminate\Queue\SyncQueue,
            'command.queue.work' instanceof \Illuminate\Queue\Console\WorkCommand,
            'command.queue.restart' instanceof \Illuminate\Queue\Console\RestartCommand,
            'queue.worker' instanceof \Illuminate\Queue\Worker,
            'command.queue.listen' instanceof \Illuminate\Queue\Console\ListenCommand,
            'queue.listener' instanceof \Illuminate\Queue\Listener,
            'queue.failer' instanceof \Illuminate\Queue\Failed\DatabaseFailedJobProvider,
            'auth.password' instanceof \Illuminate\Auth\Passwords\PasswordBrokerManager,
            'auth.password.broker' instanceof \Illuminate\Auth\Passwords\PasswordBroker,
            'translation.loader' instanceof \Illuminate\Translation\FileLoader,
            'translator' instanceof \Illuminate\Translation\Translator,
            'validation.presence' instanceof \Illuminate\Validation\DatabasePresenceVerifier,
            'command.ide-helper.generate' instanceof \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand,
            'command.ide-helper.models' instanceof \Barryvdh\LaravelIdeHelper\Console\ModelsCommand,
            'command.ide-helper.meta' instanceof \Barryvdh\LaravelIdeHelper\Console\MetaCommand,
        ],
        \app('') => [
            '' == '@',
            'events' instanceof \Illuminate\Events\Dispatcher,
            'router' instanceof \Illuminate\Routing\Router,
            'url' instanceof \Illuminate\Routing\UrlGenerator,
            'redirect' instanceof \Illuminate\Routing\Redirector,
            'Illuminate\Contracts\Routing\ResponseFactory' instanceof \Illuminate\Routing\ResponseFactory,
            'Illuminate\Contracts\Http\Kernel' instanceof \App\Http\Kernel,
            'Illuminate\Contracts\Console\Kernel' instanceof \App\Console\Kernel,
            'Illuminate\Contracts\Debug\ExceptionHandler' instanceof \App\Exceptions\Handler,
            'auth' instanceof \Illuminate\Auth\AuthManager,
            'auth.driver' instanceof \Illuminate\Auth\SessionGuard,
            'Illuminate\Contracts\Auth\Access\Gate' instanceof \Illuminate\Auth\Access\Gate,
            'cookie' instanceof \Illuminate\Cookie\CookieJar,
            'Illuminate\Contracts\Queue\EntityResolver' instanceof \Illuminate\Database\Eloquent\QueueEntityResolver,
            'db.factory' instanceof \Illuminate\Database\Connectors\ConnectionFactory,
            'db' instanceof \Illuminate\Database\DatabaseManager,
            'db.connection' instanceof \Jenssegers\Mongodb\Connection,
            'files' instanceof \Illuminate\Filesystem\Filesystem,
            'filesystem' instanceof \Illuminate\Filesystem\FilesystemManager,
            'filesystem.disk' instanceof \Illuminate\Filesystem\FilesystemAdapter,
            'Illuminate\Notifications\ChannelManager' instanceof \Illuminate\Notifications\ChannelManager,
            'session' instanceof \Illuminate\Session\SessionManager,
            'session.store' instanceof \Illuminate\Session\Store,
            'Illuminate\Session\Middleware\StartSession' instanceof \Illuminate\Session\Middleware\StartSession,
            'view.engine.resolver' instanceof \Illuminate\View\Engines\EngineResolver,
            'view.finder' instanceof \Illuminate\View\FileViewFinder,
            'view' instanceof \Illuminate\View\Factory,
            'Thujohn\Twitter\Twitter' instanceof \Thujohn\Twitter\Twitter,
            'blade.compiler' instanceof \Illuminate\View\Compilers\BladeCompiler,
            'Illuminate\Broadcasting\BroadcastManager' instanceof \Illuminate\Broadcasting\BroadcastManager,
            'Illuminate\Contracts\Broadcasting\Broadcaster' instanceof \Illuminate\Broadcasting\Broadcasters\LogBroadcaster,
            'Illuminate\Bus\Dispatcher' instanceof \Illuminate\Bus\Dispatcher,
            'cache' instanceof \Illuminate\Cache\CacheManager,
            'cache.store' instanceof \Illuminate\Cache\Repository,
            'memcached.connector' instanceof \Illuminate\Cache\MemcachedConnector,
            'command.cache.clear' instanceof \Illuminate\Cache\Console\ClearCommand,
            'command.clear-compiled' instanceof \Illuminate\Foundation\Console\ClearCompiledCommand,
            'command.auth.resets.clear' instanceof \Illuminate\Auth\Console\ClearResetsCommand,
            'command.config.cache' instanceof \Illuminate\Foundation\Console\ConfigCacheCommand,
            'command.config.clear' instanceof \Illuminate\Foundation\Console\ConfigClearCommand,
            'command.down' instanceof \Illuminate\Foundation\Console\DownCommand,
            'command.environment' instanceof \Illuminate\Foundation\Console\EnvironmentCommand,
            'command.key.generate' instanceof \Illuminate\Foundation\Console\KeyGenerateCommand,
            'command.optimize' instanceof \Illuminate\Foundation\Console\OptimizeCommand,
            'command.route.cache' instanceof \Illuminate\Foundation\Console\RouteCacheCommand,
            'command.route.clear' instanceof \Illuminate\Foundation\Console\RouteClearCommand,
            'command.route.list' instanceof \Illuminate\Foundation\Console\RouteListCommand,
            'command.storage.link' instanceof \Illuminate\Foundation\Console\StorageLinkCommand,
            'command.tinker' instanceof \Illuminate\Foundation\Console\TinkerCommand,
            'command.up' instanceof \Illuminate\Foundation\Console\UpCommand,
            'command.view.clear' instanceof \Illuminate\Foundation\Console\ViewClearCommand,
            'command.app.name' instanceof \Illuminate\Foundation\Console\AppNameCommand,
            'command.auth.make' instanceof \Illuminate\Auth\Console\MakeAuthCommand,
            'command.cache.table' instanceof \Illuminate\Cache\Console\CacheTableCommand,
            'command.console.make' instanceof \Illuminate\Foundation\Console\ConsoleMakeCommand,
            'command.controller.make' instanceof \Illuminate\Routing\Console\ControllerMakeCommand,
            'command.event.generate' instanceof \Illuminate\Foundation\Console\EventGenerateCommand,
            'command.event.make' instanceof \Illuminate\Foundation\Console\EventMakeCommand,
            'command.job.make' instanceof \Illuminate\Foundation\Console\JobMakeCommand,
            'command.listener.make' instanceof \Illuminate\Foundation\Console\ListenerMakeCommand,
            'command.mail.make' instanceof \Illuminate\Foundation\Console\MailMakeCommand,
            'command.middleware.make' instanceof \Illuminate\Routing\Console\MiddlewareMakeCommand,
            'command.model.make' instanceof \Illuminate\Foundation\Console\ModelMakeCommand,
            'command.notification.make' instanceof \Illuminate\Foundation\Console\NotificationMakeCommand,
            'command.notification.table' instanceof \Illuminate\Notifications\Console\NotificationTableCommand,
            'command.policy.make' instanceof \Illuminate\Foundation\Console\PolicyMakeCommand,
            'command.provider.make' instanceof \Illuminate\Foundation\Console\ProviderMakeCommand,
            'command.queue.failed-table' instanceof \Illuminate\Queue\Console\FailedTableCommand,
            'command.queue.table' instanceof \Illuminate\Queue\Console\TableCommand,
            'command.request.make' instanceof \Illuminate\Foundation\Console\RequestMakeCommand,
            'command.seeder.make' instanceof \Illuminate\Database\Console\Seeds\SeederMakeCommand,
            'command.session.table' instanceof \Illuminate\Session\Console\SessionTableCommand,
            'command.serve' instanceof \Illuminate\Foundation\Console\ServeCommand,
            'command.test.make' instanceof \Illuminate\Foundation\Console\TestMakeCommand,
            'command.vendor.publish' instanceof \Illuminate\Foundation\Console\VendorPublishCommand,
            'migration.repository' instanceof \Illuminate\Database\Migrations\DatabaseMigrationRepository,
            'migrator' instanceof \Illuminate\Database\Migrations\Migrator,
            'migration.creator' instanceof \Illuminate\Database\Migrations\MigrationCreator,
            'command.migrate' instanceof \Illuminate\Database\Console\Migrations\MigrateCommand,
            'command.migrate.rollback' instanceof \Illuminate\Database\Console\Migrations\RollbackCommand,
            'command.migrate.reset' instanceof \Illuminate\Database\Console\Migrations\ResetCommand,
            'command.migrate.refresh' instanceof \Illuminate\Database\Console\Migrations\RefreshCommand,
            'command.migrate.install' instanceof \Illuminate\Database\Console\Migrations\InstallCommand,
            'command.migrate.make' instanceof \Illuminate\Database\Console\Migrations\MigrateMakeCommand,
            'command.migrate.status' instanceof \Illuminate\Database\Console\Migrations\StatusCommand,
            'command.seed' instanceof \Illuminate\Database\Console\Seeds\SeedCommand,
            'composer' instanceof \Illuminate\Support\Composer,
            'command.queue.failed' instanceof \Illuminate\Queue\Console\ListFailedCommand,
            'command.queue.retry' instanceof \Illuminate\Queue\Console\RetryCommand,
            'command.queue.forget' instanceof \Illuminate\Queue\Console\ForgetFailedCommand,
            'command.queue.flush' instanceof \Illuminate\Queue\Console\FlushFailedCommand,
            'hash' instanceof \Illuminate\Hashing\BcryptHasher,
            'swift.transport' instanceof \Illuminate\Mail\TransportManager,
            'swift.mailer' instanceof \Swift_Mailer,
            'mailer' instanceof \Illuminate\Mail\Mailer,
            'Illuminate\Contracts\Pipeline\Hub' instanceof \Illuminate\Pipeline\Hub,
            'queue' instanceof \Illuminate\Queue\QueueManager,
            'queue.connection' instanceof \Illuminate\Queue\SyncQueue,
            'command.queue.work' instanceof \Illuminate\Queue\Console\WorkCommand,
            'command.queue.restart' instanceof \Illuminate\Queue\Console\RestartCommand,
            'queue.worker' instanceof \Illuminate\Queue\Worker,
            'command.queue.listen' instanceof \Illuminate\Queue\Console\ListenCommand,
            'queue.listener' instanceof \Illuminate\Queue\Listener,
            'queue.failer' instanceof \Illuminate\Queue\Failed\DatabaseFailedJobProvider,
            'auth.password' instanceof \Illuminate\Auth\Passwords\PasswordBrokerManager,
            'auth.password.broker' instanceof \Illuminate\Auth\Passwords\PasswordBroker,
            'translation.loader' instanceof \Illuminate\Translation\FileLoader,
            'translator' instanceof \Illuminate\Translation\Translator,
            'validation.presence' instanceof \Illuminate\Validation\DatabasePresenceVerifier,
            'command.ide-helper.generate' instanceof \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand,
            'command.ide-helper.models' instanceof \Barryvdh\LaravelIdeHelper\Console\ModelsCommand,
            'command.ide-helper.meta' instanceof \Barryvdh\LaravelIdeHelper\Console\MetaCommand,
        ],
    ];
}
