<?php

namespace Auditit\AudititLaravel;

trait PerformsActions
{
    /**
     * @param $action
     * @param array $tags
     * @param array $context
     */
    public function logAction($action, $tags = [], $context = [])
    {
        return AuditLogger::create('id:' . $this->{$this->getKeyName()}, $action, $tags, $context);
    }
}
