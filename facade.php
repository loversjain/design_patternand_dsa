<?php

class VideoEditor {
    public function encode($file): void
    {
        echo "encoding video start ". $file;
    }
}
class AudioEditor {
    public function mix($audioFile): void
    {
        echo "mixing the audio file ". $audioFile;
    }
}

class FileUpload {
    public function upload($filePath): void
    {
        echo "file uploading on path ". $filePath;
    }
}
class MetaData {
    public function addMetaData($file, $metadata): void
    {
        echo "Adding $metadata to $file\n";
    }
}

class MediaFacade {
    protected $videoEncoder;
    protected $audioMixer;
    protected $fileUploader;
    protected $metadataHandler;

    public function __construct() {
        $this->videoEncoder = new VideoEditor();
        $this->audioMixer = new AudioEditor();
        $this->fileUploader = new FileUpload();
        $this->metadataHandler = new MetaData();
    }
    public function createMedia($vidoeFile, $audioFile, $fileUpload, $file ,$metadata): void
    {
        $this->videoEncoder->encode($vidoeFile);
        $this->audioMixer->mix($audioFile);
        $this->fileUploader->upload($fileUpload);
        $this->metadataHandler->addMetaData($file, $metadata);
    }
}


class client {

    public function createMovie() {
        $mediaFacade = new MediaFacade();
        $mediaFacade->createMedia("as.mp4 -", " as.mp3 -", " s3 bitbucket -", " file.php -", " metadata ");

    }
}
$client = new client();
echo $client->createMovie();