<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class YouTubeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');
        $outputFile = 'downloads/' . uniqid() . '.mp3';

        $ytDlpPath = public_path('yt-dlp.exe');  // Update this path
        $ffmpegPath = public_path('ffmpeg-exe\\bin\\ffmpeg.exe'); // Update this path

        // Command to download and convert YouTube video to mp3
//        $command = "$ytDlpPath --extract-audio --audio-format mp3 -o $outputFile $url"." --ffmpeg-location ffmpeg.exe $ffmpegPath";
//        dd($command);

        $command = [
            $ytDlpPath,
            '--extract-audio',
            '--audio-format', 'mp3',
            '-o', $outputFile,
            $url,
            '--ffmpeg-location', $ffmpegPath
        ];
        $process = new Process($command);
        $process->setTimeout(3600); // 1 hour
        $process->setWorkingDirectory(public_path());
        $process->mustRun();

        try {
            $process->mustRun();
        } catch (ProcessFailedException $exception) {
            return back()->with('error', 'Conversion failed: ' . $exception->getMessage());
        }

        return response()->download($outputFile)->deleteFileAfterSend(true);
    }
}
