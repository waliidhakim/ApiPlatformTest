<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Slot extends \App\Entity\Slot implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'booking' => [parent::class, 'booking', null],
        "\0".parent::class."\0".'endTime' => [parent::class, 'endTime', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'prestation' => [parent::class, 'prestation', null],
        "\0".parent::class."\0".'startTime' => [parent::class, 'startTime', null],
        'booking' => [parent::class, 'booking', null],
        'endTime' => [parent::class, 'endTime', null],
        'id' => [parent::class, 'id', null],
        'prestation' => [parent::class, 'prestation', null],
        'startTime' => [parent::class, 'startTime', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
