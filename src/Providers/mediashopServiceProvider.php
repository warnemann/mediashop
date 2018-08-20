<?php

namespace mediashop\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


class mediashopServiceProvider extends ServiceProvider
{

  /**
   * Register the service provider.
   */
  public function register()
  {

  }

  /**
 * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
 */
public function boot(Twig $twig, Dispatcher $eventDispatcher)
  {
      $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
      {
         $partial->set('footer', 'mediashop::PageDesign.Partials.mediashopFooter');
/*         $partial->set('head', 'mediashop::PageDesign.Partials.Header.mediashopHead'); */

      }, 0);
      return false;
  }

}


/*

      $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
      {
         $partial->set('footer', 'mediashop::content.mediashopFooter');
      }, 0);


$eventDispatcher->listen('IO.init.templates', function(Partial $partial)
   {
     $partial->set('footer', 'ThemeName::PageDesign.Partials.Footer'); // Override Footer
   }, 0);
*/


