<?php

namespace TwinElements\Component\AdminTranslator;

use Symfony\Contracts\Translation\TranslatorInterface;

class AdminTranslator
{
    private TranslatorInterface $translator;

    private string $adminLocale;

    public function __construct(TranslatorInterface $translator, string $adminLocale)
    {
        $this->translator = $translator;
        $this->adminLocale = $adminLocale;
    }

    public function translate(string $key, array $params = [], $domain = null): string
    {
        return $this->translator->trans($key, $params, $domain, $this->adminLocale);
    }
}
