<?php
    function getTemplateTag(): string
    {
        return <<<BADGE
            <div class="tag-size-{{size}} bg-{{background}} tag-color-{{color}}">
                <span class="font-tag-{{size}}">{{name}}</span>
            </div>
        BADGE;
    }