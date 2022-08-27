<?php

namespace App\Filament\Pages;

use App\Configurations\UiConfiguration;
use Filament\Pages\Page;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Configurations extends Page
{
    use LivewireAlert;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.configurations';

    public $landing_page_headline, $landing_page_sub_headline, $landing_page_tagline, $blog_page_sub_headline, $blog_page_headline, $blog_page_tagline, $slogan;

    public function mount()
    {
        $this->loadSetttings();
    }

    public function saveConfiguration()
    {
        UiConfiguration::updateConfig('landing-page-headline', $this->landing_page_headline);
        UiConfiguration::updateConfig('landing-page-sub_headline', $this->landing_page_sub_headline);
        UiConfiguration::updateConfig('landing-page-tagline', $this->landing_page_tagline);
        UiConfiguration::updateConfig('blog-page-headline', $this->blog_page_headline);
        UiConfiguration::updateConfig('blog-page-sub_headline', $this->blog_page_sub_headline);
        UiConfiguration::updateConfig('blog-page-tagline', $this->blog_page_tagline);
        UiConfiguration::updateConfig('slogan', $this->slogan);
        $this->alert('success', "Changes Saved");
    }

    public function resetConfiguration()
    {
        UiConfiguration::reset();
        $this->loadSetttings();
        $this->alert('success', "Settings Reset to default");
    }

    public function loadSetttings()
    {
        $this->landing_page_headline =  UiConfiguration::getConfigValue('landing-page-headline');
        $this->landing_page_sub_headline =  UiConfiguration::getConfigValue('landing-page-sub_headline');
        $this->landing_page_tagline =  UiConfiguration::getConfigValue('landing-page-tagline');
        $this->blog_page_headline =  UiConfiguration::getConfigValue('blog-page-headline');
        $this->blog_page_sub_headline =  UiConfiguration::getConfigValue('blog-page-sub_headline');
        $this->blog_page_tagline =  UiConfiguration::getConfigValue('blog-page-tagline');
        $this->slogan =  UiConfiguration::getConfigValue('slogan');
    }
}
