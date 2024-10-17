<?php

namespace Sprint\Migration;

class M20140816112031_create_products extends Version
{
  protected $author = "admin";

  protected $description = "";

  protected $moduleVersion = "4.12.6";

  /**
   * @return bool|void
   * @throws Exceptions\HelperException
   */
  public function up()
  {
    $helper = $this->getHelperManager();
    $helper->Iblock()->saveIblockType(array(
      'ID'               => 'products',
      'SECTIONS'         => 'Y',
      'EDIT_FILE_BEFORE' => '',
      'EDIT_FILE_AFTER'  => '',
      'IN_RSS'           => 'N',
      'SORT'             => '100',
      'LANG'             =>
        array(
          'ru' =>
            array(
              'NAME'         => 'Продукция',
              'SECTION_NAME' => 'Разделы',
              'ELEMENT_NAME' => 'Товары',
            ),
          'en' =>
            array(
              'NAME'         => 'Products',
              'SECTION_NAME' => 'Sections',
              'ELEMENT_NAME' => 'Products',
            ),
        ),
    ));
    $iblockId = $helper->Iblock()->saveIblock(array(
      'IBLOCK_TYPE_ID'      => 'products',
      'LID'                 =>
        array(
          0 => 's1',
        ),
      'CODE'                => 'products',
      'API_CODE'            => null,
      'REST_ON'             => 'N',
      'NAME'                => 'Продукты',
      'ACTIVE'              => 'Y',
      'SORT'                => '500',
      'LIST_PAGE_URL'       => '#SITE_DIR#/products/',
      'DETAIL_PAGE_URL'     => '#SITE_DIR#/products/#SECTION_ID#/#ID#/',
      'SECTION_PAGE_URL'    => '#SITE_DIR#/products/#ID#/',
      'CANONICAL_PAGE_URL'  => '',
      'PICTURE'             => null,
      'DESCRIPTION'         => '',
      'DESCRIPTION_TYPE'    => 'text',
      'RSS_TTL'             => '24',
      'RSS_ACTIVE'          => 'Y',
      'RSS_FILE_ACTIVE'     => 'N',
      'RSS_FILE_LIMIT'      => null,
      'RSS_FILE_DAYS'       => null,
      'RSS_YANDEX_ACTIVE'   => 'N',
      'XML_ID'              => 'furniture_products_s1',
      'INDEX_ELEMENT'       => 'Y',
      'INDEX_SECTION'       => 'Y',
      'WORKFLOW'            => 'N',
      'BIZPROC'             => 'N',
      'SECTION_CHOOSER'     => 'L',
      'LIST_MODE'           => '',
      'RIGHTS_MODE'         => 'S',
      'SECTION_PROPERTY'    => 'N',
      'PROPERTY_INDEX'      => 'N',
      'VERSION'             => '1',
      'LAST_CONV_ELEMENT'   => '0',
      'SOCNET_GROUP_ID'     => null,
      'EDIT_FILE_BEFORE'    => '',
      'EDIT_FILE_AFTER'     => '',
      'SECTIONS_NAME'       => 'Разделы',
      'SECTION_NAME'        => 'Раздел',
      'ELEMENTS_NAME'       => 'Товары',
      'ELEMENT_NAME'        => 'Элемент',
      'EXTERNAL_ID'         => 'furniture_products_s1',
      'LANG_DIR'            => '/',
      'IPROPERTY_TEMPLATES' =>
        array(),
      'ELEMENT_ADD'         => 'Добавить товар',
      'ELEMENT_EDIT'        => 'Изменить товар',
      'ELEMENT_DELETE'      => 'Удалить товар',
      'SECTION_ADD'         => 'Добавить раздел',
      'SECTION_EDIT'        => 'Изменить раздел',
      'SECTION_DELETE'      => 'Удалить раздел',
    ));
    $helper->Iblock()->saveIblockFields($iblockId, array(
      'IBLOCK_SECTION'           =>
        array(
          'NAME'          => 'Привязка к разделам',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' =>
            array(
              'KEEP_IBLOCK_SECTION_ID' => 'N',
            ),
          'VISIBLE'       => 'Y',
        ),
      'ACTIVE'                   =>
        array(
          'NAME'          => 'Активность',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => 'Y',
          'VISIBLE'       => 'Y',
        ),
      'ACTIVE_FROM'              =>
        array(
          'NAME'          => 'Начало активности',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'ACTIVE_TO'                =>
        array(
          'NAME'          => 'Окончание активности',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'SORT'                     =>
        array(
          'NAME'          => 'Сортировка',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '0',
          'VISIBLE'       => 'Y',
        ),
      'NAME'                     =>
        array(
          'NAME'          => 'Название',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'PREVIEW_PICTURE'          =>
        array(
          'NAME'          => 'Картинка для анонса',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' =>
            array(
              'FROM_DETAIL'             => 'N',
              'UPDATE_WITH_DETAIL'      => 'N',
              'DELETE_WITH_DETAIL'      => 'N',
              'SCALE'                   => 'N',
              'WIDTH'                   => '',
              'HEIGHT'                  => '',
              'IGNORE_ERRORS'           => 'N',
              'METHOD'                  => 'resample',
              'COMPRESSION'             => 95,
              'USE_WATERMARK_TEXT'      => 'N',
              'WATERMARK_TEXT'          => '',
              'WATERMARK_TEXT_FONT'     => '',
              'WATERMARK_TEXT_COLOR'    => '',
              'WATERMARK_TEXT_SIZE'     => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE'      => 'N',
              'WATERMARK_FILE'          => '',
              'WATERMARK_FILE_ALPHA'    => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER'    => '',
            ),
          'VISIBLE'       => 'Y',
        ),
      'PREVIEW_TEXT_TYPE'        =>
        array(
          'NAME'          => 'Тип описания для анонса',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE'       => 'Y',
        ),
      'PREVIEW_TEXT'             =>
        array(
          'NAME'          => 'Описание для анонса',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'DETAIL_PICTURE'           =>
        array(
          'NAME'          => 'Детальная картинка',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' =>
            array(
              'SCALE'                   => 'N',
              'WIDTH'                   => '',
              'HEIGHT'                  => '',
              'IGNORE_ERRORS'           => 'N',
              'METHOD'                  => 'resample',
              'COMPRESSION'             => 95,
              'USE_WATERMARK_TEXT'      => 'N',
              'WATERMARK_TEXT'          => '',
              'WATERMARK_TEXT_FONT'     => '',
              'WATERMARK_TEXT_COLOR'    => '',
              'WATERMARK_TEXT_SIZE'     => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE'      => 'N',
              'WATERMARK_FILE'          => '',
              'WATERMARK_FILE_ALPHA'    => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER'    => '',
            ),
          'VISIBLE'       => 'Y',
        ),
      'DETAIL_TEXT_TYPE'         =>
        array(
          'NAME'          => 'Тип детального описания',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE'       => 'Y',
        ),
      'DETAIL_TEXT'              =>
        array(
          'NAME'          => 'Детальное описание',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'XML_ID'                   =>
        array(
          'NAME'          => 'Внешний код',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'CODE'                     =>
        array(
          'NAME'          => 'Символьный код',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' =>
            array(
              'UNIQUE'          => 'Y',
              'TRANSLITERATION' => 'Y',
              'TRANS_LEN'       => 100,
              'TRANS_CASE'      => 'L',
              'TRANS_SPACE'     => '-',
              'TRANS_OTHER'     => '-',
              'TRANS_EAT'       => 'Y',
              'USE_GOOGLE'      => 'N',
            ),
          'VISIBLE'       => 'Y',
        ),
      'TAGS'                     =>
        array(
          'NAME'          => 'Теги',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'SECTION_NAME'             =>
        array(
          'NAME'          => 'Название',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'SECTION_PICTURE'          =>
        array(
          'NAME'          => 'Картинка для анонса',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' =>
            array(
              'FROM_DETAIL'             => 'N',
              'UPDATE_WITH_DETAIL'      => 'N',
              'DELETE_WITH_DETAIL'      => 'N',
              'SCALE'                   => 'N',
              'WIDTH'                   => '',
              'HEIGHT'                  => '',
              'IGNORE_ERRORS'           => 'N',
              'METHOD'                  => 'resample',
              'COMPRESSION'             => 95,
              'USE_WATERMARK_TEXT'      => 'N',
              'WATERMARK_TEXT'          => '',
              'WATERMARK_TEXT_FONT'     => '',
              'WATERMARK_TEXT_COLOR'    => '',
              'WATERMARK_TEXT_SIZE'     => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE'      => 'N',
              'WATERMARK_FILE'          => '',
              'WATERMARK_FILE_ALPHA'    => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER'    => '',
            ),
          'VISIBLE'       => 'Y',
        ),
      'SECTION_DESCRIPTION_TYPE' =>
        array(
          'NAME'          => 'Тип описания',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE'       => 'Y',
        ),
      'SECTION_DESCRIPTION'      =>
        array(
          'NAME'          => 'Описание',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'SECTION_DETAIL_PICTURE'   =>
        array(
          'NAME'          => 'Детальная картинка',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' =>
            array(
              'SCALE'                   => 'N',
              'WIDTH'                   => '',
              'HEIGHT'                  => '',
              'IGNORE_ERRORS'           => 'N',
              'METHOD'                  => 'resample',
              'COMPRESSION'             => 95,
              'USE_WATERMARK_TEXT'      => 'N',
              'WATERMARK_TEXT'          => '',
              'WATERMARK_TEXT_FONT'     => '',
              'WATERMARK_TEXT_COLOR'    => '',
              'WATERMARK_TEXT_SIZE'     => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE'      => 'N',
              'WATERMARK_FILE'          => '',
              'WATERMARK_FILE_ALPHA'    => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER'    => '',
            ),
          'VISIBLE'       => 'Y',
        ),
      'SECTION_XML_ID'           =>
        array(
          'NAME'          => 'Внешний код',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE'       => 'Y',
        ),
      'SECTION_CODE'             =>
        array(
          'NAME'          => 'Символьный код',
          'IS_REQUIRED'   => 'Y',
          'DEFAULT_VALUE' =>
            array(
              'UNIQUE'          => 'Y',
              'TRANSLITERATION' => 'Y',
              'TRANS_LEN'       => 100,
              'TRANS_CASE'      => 'L',
              'TRANS_SPACE'     => '-',
              'TRANS_OTHER'     => '-',
              'TRANS_EAT'       => 'Y',
              'USE_GOOGLE'      => 'N',
            ),
          'VISIBLE'       => 'Y',
        ),
      'LOG_SECTION_ADD'          =>
        array(
          'NAME'          => 'LOG_SECTION_ADD',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
      'LOG_SECTION_EDIT'         =>
        array(
          'NAME'          => 'LOG_SECTION_EDIT',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
      'LOG_SECTION_DELETE'       =>
        array(
          'NAME'          => 'LOG_SECTION_DELETE',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
      'LOG_ELEMENT_ADD'          =>
        array(
          'NAME'          => 'LOG_ELEMENT_ADD',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
      'LOG_ELEMENT_EDIT'         =>
        array(
          'NAME'          => 'LOG_ELEMENT_EDIT',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
      'LOG_ELEMENT_DELETE'       =>
        array(
          'NAME'          => 'LOG_ELEMENT_DELETE',
          'IS_REQUIRED'   => 'N',
          'DEFAULT_VALUE' => null,
          'VISIBLE'       => 'Y',
        ),
    ));
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME'               => 'Вес',
      'ACTIVE'             => 'Y',
      'SORT'               => '500',
      'CODE'               => 'WEIGHT',
      'DEFAULT_VALUE'      => '',
      'PROPERTY_TYPE'      => 'N',
      'ROW_COUNT'          => '1',
      'COL_COUNT'          => '30',
      'LIST_TYPE'          => 'L',
      'MULTIPLE'           => 'N',
      'XML_ID'             => null,
      'FILE_TYPE'          => '',
      'MULTIPLE_CNT'       => '5',
      'LINK_IBLOCK_ID'     => '0',
      'WITH_DESCRIPTION'   => 'N',
      'SEARCHABLE'         => 'N',
      'FILTRABLE'          => 'N',
      'IS_REQUIRED'        => 'N',
      'VERSION'            => '1',
      'USER_TYPE'          => null,
      'USER_TYPE_SETTINGS' => 'a:0:{}',
      'HINT'               => '',
    ));
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME'               => 'Единица измерения',
      'ACTIVE'             => 'Y',
      'SORT'               => '500',
      'CODE'               => 'MEASURE',
      'DEFAULT_VALUE'      => '',
      'PROPERTY_TYPE'      => 'L',
      'ROW_COUNT'          => '1',
      'COL_COUNT'          => '30',
      'LIST_TYPE'          => 'L',
      'MULTIPLE'           => 'N',
      'XML_ID'             => null,
      'FILE_TYPE'          => '',
      'MULTIPLE_CNT'       => '5',
      'LINK_IBLOCK_ID'     => '0',
      'WITH_DESCRIPTION'   => 'N',
      'SEARCHABLE'         => 'N',
      'FILTRABLE'          => 'N',
      'IS_REQUIRED'        => 'N',
      'VERSION'            => '1',
      'USER_TYPE'          => null,
      'USER_TYPE_SETTINGS' => 'a:0:{}',
      'HINT'               => '',
      'VALUES'             =>
        array(
          0 =>
            array(
              'VALUE'  => 'г',
              'DEF'    => 'N',
              'SORT'   => '500',
              'XML_ID' => 'b86ce9e24eb154a89710570bbd30680a',
            ),
          1 =>
            array(
              'VALUE'  => 'кг',
              'DEF'    => 'N',
              'SORT'   => '500',
              'XML_ID' => '11a63c6659dba9afeb13b23a99e1ed0c',
            ),
          2 =>
            array(
              'VALUE'  => 'л',
              'DEF'    => 'N',
              'SORT'   => '500',
              'XML_ID' => 'b92e2c609cd0f4a6a75b463cac14feaf',
            ),
          3 =>
            array(
              'VALUE'  => 'уп',
              'DEF'    => 'N',
              'SORT'   => '500',
              'XML_ID' => '80678074d862208f25d061cdaf8731e1',
            ),
          4 =>
            array(
              'VALUE'  => 'шт',
              'DEF'    => 'N',
              'SORT'   => '500',
              'XML_ID' => '5aa75cb4c21ece0fe10e3f47245467fa',
            ),
        ),
      'FEATURES'           =>
        array(
          0 =>
            array(
              'MODULE_ID'  => 'iblock',
              'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
          1 =>
            array(
              'MODULE_ID'  => 'iblock',
              'FEATURE_ID' => 'LIST_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
        ),
    ));


    // разделы
    $iblockId = $helper->Iblock()->getIblockIdIfExists(
      'products',
      'products'
    );

    $helper->Iblock()->addSectionsFromTree(
      $iblockId,
      array(
        0 =>
          array(
            'NAME'             => 'Мягкая мебель',
            'CODE'             => 'myagkaya-mebel',
            'SORT'             => '100',
            'ACTIVE'           => 'Y',
            'XML_ID'           => '2',
            'DESCRIPTION'      => 'Диваны, кресла и прочая мягкая мебель',
            'DESCRIPTION_TYPE' => 'html',
          ),
        1 =>
          array(
            'NAME'             => 'Офисная мебель',
            'CODE'             => 'ofisnaya-mebel',
            'SORT'             => '200',
            'ACTIVE'           => 'Y',
            'XML_ID'           => '3',
            'DESCRIPTION'      => 'Диваны, столы, стулья',
            'DESCRIPTION_TYPE' => 'html',
          ),
        2 =>
          array(
            'NAME'             => 'Мебель для кухни',
            'CODE'             => 'mebel-dlya-kukhni',
            'SORT'             => '300',
            'ACTIVE'           => 'Y',
            'XML_ID'           => '4',
            'DESCRIPTION'      => 'Полки, ящики, столы и стулья',
            'DESCRIPTION_TYPE' => 'html',
          ),
      ));

    // элементы
    $this->getExchangeManager()
      ->IblockElementsImport()
      ->setExchangeResource('iblock_elements.xml')
      ->setLimit(20)
      ->execute(function ($item) {
        $this->getHelperManager()
          ->Iblock()
          ->addElement(
            $item['iblock_id'],
            $item['fields'],
            $item['properties']
          );
      });
  }


  /**
   * @return bool|void
   * @throws Exceptions\HelperException
   */
  public function down()
  {
    $helper = $this->getHelperManager();
    $ok = $helper->Iblock()->deleteIblockIfExists('products');

    if ($ok) {
      $this->outSuccess('Инфоблок удален');
    } else {
      $this->outError('Ошибка удаления инфоблока');
    }
  }
}
