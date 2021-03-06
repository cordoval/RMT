<?php

namespace Liip\RMT\Action;

use Liip\RMT\Context;

/**
 * Commit everything
 */
class VcsCommitAction extends BaseAction
{
    public function execute()
    {
        Context::get('vcs')->saveWorkingCopy(
            'Release of new version '.Context::getParam('new-version')
        );
        $this->confirmSuccess();
    }
}

