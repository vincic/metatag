<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\OriginalSource.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The advanced "Original Source" meta tag.
 *
 * @MetatagTag(
 *   id = "original_source",
 *   label = @Translation("Original source"),
 *   description = @Translation("Used to indicate the URL that broke the story, and can link to either an internal URL or an external source. If the full URL is not known it is acceptable to use a partial URL or just the domain name."),
 *   name = "original-source",
 *   group = "advanced",
 *   weight = 4,
 *   image = FALSE,
 *   multiple = FALSE
 * )
 */
class OriginalSource extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
