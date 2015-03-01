<?php namespace Davibennun\LaravelPushNotification;

class PushNotification
{
    public function app($appName)
    {
        return new App(\Config::get('laravel-push-notification::'.$appName));
    }

    public function message()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Message'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function device()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Device'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function deviceCollection()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Collection\DeviceCollection'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function pushManager()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\PushManager'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function apnsAdapter()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Adapter\ApnsAdapter'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function gcmAdapter()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\GcmAdapter'));

        return $instance->newInstanceArgs(func_get_args());
    }

    public function push()
    {
        $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Push'));

        return $instance->newInstanceArgs(func_get_args());
    }
}
