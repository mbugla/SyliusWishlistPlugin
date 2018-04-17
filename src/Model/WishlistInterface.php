<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusWishlistPlugin\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Core\Model\ShopUserInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface WishlistInterface extends ResourceInterface
{
    /**
     * @return Collection|ProductInterface[]
     */
    public function getProducts(): Collection;

    public function hasProduct(ProductInterface $product): bool;

    public function addProduct(ProductInterface $product): void;

    public function removeProduct(ProductInterface $product): void;

    public function getUser(): ?ShopUserInterface;

    public function setUser(ShopUserInterface $shopUser): void;
}