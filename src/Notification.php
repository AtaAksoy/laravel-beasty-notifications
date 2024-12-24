<?php

namespace Ataaaksoy\LaravelBeastyNotifications;

class Notification {
    
    public string $title = "", $body = "", $type = "verified";

    public static function make() : self {
        return new self();
    }

    public function title(string $title) : self {
        $this->title = $title;

        return $this;
    }

    public function body(string $body) : self {
        $this->body = $body;
        
        return $this;
    }

    public function success() : self {
        $this->type = "success";

        return $this;
    }

    public function error() : self {
        $this->type = "error";

        return $this;
    }

    public function send() : void {
        session()->push('laravel-beasty-notifications', $this);
    }

}