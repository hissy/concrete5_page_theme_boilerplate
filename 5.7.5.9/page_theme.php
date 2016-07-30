<?php
namespace Application\Theme\Boilerplate;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

/**
 * Class PageTheme.
 *
 * @package Application\Theme\Boilerplate
 */
class PageTheme extends Theme implements ThemeProviderInterface
{
    /**
     * The name of grid framework to support, or false (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/adding-grid-support-to-your-theme/enabling-grid-support-areas-and-layouts
     *
     * @var string|bool [bootstrap3, bootstrap2, foundation, nine_sixty]
     */
    protected $pThemeGridFrameworkHandle = false;

    /**
     * Get theme name (Required).
     *
     * @return string
     */
    public function getThemeName()
    {
        return t('Boilerplate');
    }

    /**
     * Get theme description (Required).
     *
     * @return string
     */
    public function getThemeDescription()
    {
        return t('A concrete5 theme.');
    }

    /**
     * Get theme area layout presets (Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/adding-complex-custom-layout-presets-in-your-theme
     *
     * @return array
     */
    public function getThemeAreaLayoutPresets()
    {
        $presets = array();
        /*
        $presets = array(
            array(
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => array(
                    '<div class="col-sm-4"></div>',
                    '<div class="col-sm-8"></div>'
                ),
            ),
        );
         */
        return $presets;
    }

    /**
     * Register assets (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/advanced-css-and-javascript-usage/requiring-core-javascript-or-css-in-a-theme
     */
    public function registerAssets()
    {
//        $this->providesAsset('javascript', 'bootstrap/*');
//        $this->providesAsset('css', 'bootstrap/*');
//        $this->providesAsset('css', 'blocks/*');
//        $this->providesAsset('css', 'core/frontend/*');

//        $this->requireAsset('css', 'font-awesome');
//        $this->requireAsset('javascript', 'jquery');
//        $this->requireAsset('javascript', 'picturefill');
//        $this->requireAsset('javascript-conditional', 'html5-shiv');
//        $this->requireAsset('javascript-conditional', 'respond');
    }

    /**
     * Get theme block classes (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor
     *
     * @return array
     */
    public function getThemeBlockClasses()
    {
        $classes = array();
        /*
        $classes = array(
            'page_list' => array(
                'recent-blog-entry',
                'blog-entry-list',
            ),
        );
        */
        return $classes;
    }

    /**
     * Get theme area classes (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor
     *
     * @return array
     */
    public function getThemeAreaClasses()
    {
        $classes = array();
        /*
        $classes = array(
            'Page Footer' => array('area-content-accent'),
        );
        */
        return $classes;
    }

    /**
     * Get theme editor classes (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor
     *
     * @return array
     */
    public function getThemeEditorClasses()
    {
        $classes = array();
        /*
        $classes = array(
            array('title' => t('Title Thin'), 'menuClass' => 'title-thin', 'spanClass' => 'title-thin', 'forceBlock' => 1),
            array('title' => t('Image Caption'), 'menuClass' => 'image-caption', 'spanClass' => 'image-caption', 'forceBlock' => '-1'),
        );
        */
        return $classes;
    }

    /**
     * Get theme default block templates (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/working-with-blocks/working-with-existing-block-types/creating-additional-custom-view-templates/default-a-block-to-a-custom-template-in-a-theme
     *
     * @return array
     */
    public function getThemeDefaultBlockTemplates()
    {
        $templates = array();
        /*
        $templates = array(
            'calendar' => 'bootstrap_calendar.php'
        );
        */
        return $templates;
    }

    /**
     * Get theme responsive image map (NOT Required).
     *
     * @see http://documentation.concrete5.org/developers/designing-for-concrete5/supporting-responsive-images-in-your-concrete5-theme
     *
     * @return array
     */
    public function getThemeResponsiveImageMap()
    {
        $map = array();
        /*
        $map = array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        );
        */
        return $map;
    }
}
