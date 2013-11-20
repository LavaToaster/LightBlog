<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Symfony\Component\HttpFoundation\File\Exception\FileException;

class EditorController extends \BaseController
{
    public function tweet($id)
    {
        return \Twitter::getTweet($id, ['format' => 'json']);
    }

    public function attachment()
    {
        $file = \Input::file('attachment.file');

        try {
            $file->move(public_path('uploads'), ($fileName = strtolower(str_random(30)) . "." . $file->guessClientExtension()));

            return [
                'success' => true,
                'file' => $fileName
            ];
        } catch (FileException $e) {
            return \Response::json(['success' => false], 500);
        }
    }
}