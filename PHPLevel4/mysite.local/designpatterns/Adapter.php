<?php


// ADAPTER
interface SuperMediaPlayer
{
    public function playOgg(string $filename): void;
    public function playMp4(string $filename): void;
}


class OggPlayer implements SuperMediaPlayer
{

    public function playOgg(string $filename): void
    {
        // TODO: Implement playOgg() method.
    }

    public function playMp4(string $filename): void
    {
        // TODO: Implement playMp4() method.
    }
}


class Mp4Player implements SuperMediaPlayer
{

    public function playOgg(string $filename): void
    {
        // TODO: Implement playOgg() method.
    }

    public function playMp4(string $filename): void
    {
        // TODO: Implement playMp4() method.
    }
}



interface MediaPlayer
{
     public function play(string $audioType, string $filename);
}



class MediaAdapter implements SuperMediaPlayer
{

    private $audioType;

    public function __construct(string $audioType)
    {
        $this->audioType = $audioType;
    }


    public function play(string $audioType, string $filename)
    {
        // TODO: Implement play() method.
    }



    public function playOgg(string $filename): void
    {

    }


    public function playMp4(string $filename): void
    {
        // TODO: Implement playMp4() method.
    }
}


class AudioAdapter implements MediaPlayer
{

    public function play(string $audioType, string $filename)
    {
        // TODO: Implement play() method.
    }
}