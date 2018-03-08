<?php

namespace Para\Plugin\EventSubscriber;

use Para\Plugin\Event\FinishedCopyEvent;
use Para\Plugin\Event\FinishedSyncEvent;
use Para\Plugin\Event\StartSyncEvent;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class SyncSubscriber.
 *
 * @package Para\Plugin\EventSubscriber
 */
class SyncSubscriber implements EventSubscriberInterface
{

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            StartSyncEvent::NAME => [
                ['startSyncProcess']
            ],
            FinishedSyncEvent::NAME => [
                ['finishedSyncProcess']
            ],
            FinishedCopyEvent::NAME => [
                ['finishedCopy']
            ]
        ];
    }

    /**
     * Callback method.
     *
     * Will be executed when a start sync event has been triggered.
     *
     * @param \Para\Plugin\Event\StartSyncEvent $event
     *   The start sync event.
     */
    public function startSyncProcess(StartSyncEvent $event)
    {
        $output = new ConsoleOutput();

        $output->writeln(
            sprintf(
                '<info>Started syncing changes of project <fg=red>%s</> to project <fg=red>%s</>...</info>',
                $event->getSourceProject()->getName(),
                $event->getTargetProject()->getName()
            )
        );
    }

    /**
     * Callback method.
     *
     * Will be executed when a finished sync event has been triggered.
     *
     * @param \Para\Plugin\Event\FinishedSyncEvent $event
     *   The finished sync event.
     */
    public function finishedSyncProcess(FinishedSyncEvent $event)
    {
        $output = new ConsoleOutput();

        $output->writeln(
            sprintf(
                '<info>Synced file changes from <fg=red>%s</> to file <fg=red>%s</>.</info>',
                $event->getSourceFile()->getPathname(),
                $event->getTargetFile()->getPathname()
            )
        );
    }

    /**
     * Callback method.
     *
     * Will be executed when a finished copy event has been triggered.
     *
     * @param \Para\Plugin\Event\FinishedCopyEvent $event
     *   The finished copy event.
     */
    public function finishedCopy(FinishedCopyEvent $event)
    {
        $output = new ConsoleOutput();

        $output->writeln(
            sprintf(
                '<info>Just needed to copy <fg=red>%s</> to <fg=red>%s</>.</info>',
                $event->getSourceFile()->getPathname(),
                $event->getTargetFile()->getPathname()
            )
        );
    }
}
