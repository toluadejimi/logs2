<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class VirtualAgent extends TwiML {
    /**
     * VirtualAgent constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = []) {
        parent::__construct('VirtualAgent', null, $attributes);
    }

    /**
     * Add Config child.
     *
     * @param array $attributes Optional attributes
     * @return Config Child element.
     */
    public function config($attributes = []): Config {
        return $this->nest(new Config($attributes));
    }

    /**
     * Add Parameter child.
     *
     * @param array $attributes Optional attributes
     * @return Parameter Child element.
     */
    public function parameter($attributes = []): Parameter {
        return $this->nest(new Parameter($attributes));
    }

    /**
     * Add ConnectorName attribute.
     *
     * @param string $connectorName Defines the conversation profile Dialogflow
     *                              needs to use
     */
    public function setConnectorName($connectorName): self {
        return $this->setAttribute('connectorName', $connectorName);
    }

    /**
     * Add Language attribute.
     *
     * @param string $language Language to be used by Dialogflow to transcribe
     *                         speech
     */
    public function setLanguage($language): self {
        return $this->setAttribute('language', $language);
    }

    /**
     * Add SentimentAnalysis attribute.
     *
     * @param bool $sentimentAnalysis Whether sentiment analysis needs to be
     *                                enabled or not
     */
    public function setSentimentAnalysis($sentimentAnalysis): self {
        return $this->setAttribute('sentimentAnalysis', $sentimentAnalysis);
    }

    /**
     * Add StatusCallback attribute.
     *
     * @param string $statusCallback URL to post status callbacks from Twilio
     */
    public function setStatusCallback($statusCallback): self {
        return $this->setAttribute('statusCallback', $statusCallback);
    }

    /**
     * Add StatusCallbackMethod attribute.
     *
     * @param string $statusCallbackMethod HTTP method to use when requesting the
     *                                     status callback URL
     */
    public function setStatusCallbackMethod($statusCallbackMethod): self {
        return $this->setAttribute('statusCallbackMethod', $statusCallbackMethod);
    }
}