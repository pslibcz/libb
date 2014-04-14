<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 * @property-read \SystemContainer $context
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

}
