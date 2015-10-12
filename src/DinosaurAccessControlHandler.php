<?php

/**
 * @file
 * Contains Drupal\dinodb\DinosaurAccessControlHandler.
 */

namespace Drupal\dinodb;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Dinosaur entity.
 *
 * @see \Drupal\dinodb\Entity\Dinosaur.
 */
class DinosaurAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view dinosaur entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit dinosaur entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete dinosaur entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add dinosaur entities');
  }

}
