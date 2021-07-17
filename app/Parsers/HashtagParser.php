<?php

namespace App\Parsers;
use League\CommonMark\Environment;
use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;
use App\Models\Post;

class HashtagParser implements InlineParserInterface
{
    public function getCharacters(): array
    {
        return ['#'];
    }

    public function parse(InlineParserContext $inlineContext): bool
    {
        $cursor = $inlineContext->getCursor();
        // The @ symbol must not have any other characters immediately prior
        $previousChar = $cursor->peek(-1);
        if ($previousChar !== null && $previousChar !== ' ') {
            // peek() doesn't modify the cursor, so no need to restore state first
            return false;
        }
        // Save the cursor state in case we need to rewind and bail
        $previousState = $cursor->saveState();
        // Advance past the @ symbol to keep parsing simpler
        $cursor->advance();
        // Parse the handle
        $tag = $cursor->match('/^[A-Za-z0-9_]{1,15}(?!\w)/');
        if (empty($handle)) {
            // Regex failed to match; this isn't a valid Twitter handle
            $cursor->restoreState($previousState);
            return false;
        }

        $poste = new Post;
        $poste->title($tag);
        $poste->body($tag);
       
        $poste->slug('Ouiais');
    
        $poste->user_id=auth()->user()->id;
    
        $poste->save();
         // Need to dispatch here to attach the tag (or queue for tagging) to the post
         app('tagqueue')->addTag($tag);
         //$out = new \Symfony\Component\Console\Output\ConsoleOutput();
         //$out->writeln("Hello from Terminal");
         //Log::debug('Tagss');

         $tagUrl = '/tag/' . $tag;
 
         $inlineContext->getContainer()->appendChild(new Link($tagUrl, '#' . $tag));
 
         return true;
       /* $profileUrl = 'https://twitter.com/' . $handle;
        $inlineContext->getContainer()->appendChild(new Link($profileUrl, '@' . $handle));
        return true;*/
    }


//$environment = Environment::createCommonMarkEnvironment();
//$environment->addInlineParser(new TwitterHandleParser());
}