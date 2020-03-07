<?php

/**
*   kernel
*
*   @version 191222
*/
declare(strict_types=1);

namespace console;

//use Movement\http\EmitterInterface;
//use Psr\Http\Message\ServerRequestInterface;

//$middleware = $containe->get(RequestHandlerInterface::class);
//$request = $containe->get(ServerRequestInterface::class);

//require_once(realpath(__DIR__ . '/middlewares.php'));

//$response = $middleware->handle($request);

//$emitter = $containe->get(EmitterInterface::class);
//$emitter->emit($request);

///////////////////////////////////////////

use splitbrain\phpcli\CLI;
//use splitbrain\phpcli\Options;


//現在のConcerto CLIを見て、再検討

//$requestはどうする?

$cli = $middleware->handle($request);

$cli->run();



///////////////////////////////////////////
//sample

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

class Minimal extends CLI
{
    // register options and arguments
    protected function setup(Options $options)
    {
        $options->setHelp('A very minimal example that does nothing but print a version');
        $options->registerOption('version', 'print version', 'v');
    }

    // implement your code
    protected function main(Options $options)
    {
        if ($options->getOpt('version')) {
            $this->info('1.0.0');
        } else {
            echo $options->help();
        }
    }
}
// execute it
$cli = new Minimal();
$cli->run();

///////////////////////////////////////////















