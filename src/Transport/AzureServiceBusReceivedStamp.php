<?php

namespace MicroSoftAzure\AzureServiceBusMessenger\Transport;

use MicroSoftAzure\AzureServiceBusMessenger\Azure\ServiceBus\BrokerProperties;
use MicroSoftAzure\AzureServiceBusMessenger\Azure\ServiceBus\CustomProperties;
use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;

class AzureServiceBusReceivedStamp implements NonSendableStampInterface {
  private BrokerProperties $brokerProperties;
  private CustomProperties $customProperties;

  /**
   * AzureServiceBusReceivedStamp constructor.
   */
  public function __construct(BrokerProperties $brokerProperties, CustomProperties $customProperties) {
    $this->brokerProperties = $brokerProperties;
    $this->customProperties = $customProperties;
  }

  /**
   * @return BrokerProperties
   */
  public function getBrokerProperties(): BrokerProperties {
    return $this->brokerProperties;
  }

  /**
   * @return CustomProperties
   */
  public function getCustomProperties(): CustomProperties {
    return $this->customProperties;
  }

}
