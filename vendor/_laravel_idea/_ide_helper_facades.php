<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Anand\LaravelPaytmWallet\Facades {

    /**
     * @see \Anand\LaravelPaytmWallet\Contracts\Factory::driver
     * @method static \Anand\LaravelPaytmWallet\Contracts\Provider driver($do = null)
     */
    class PaytmWallet {}
}

namespace Arkitecht\Twilio\Facades {

    /**
     * @see \Arkitecht\Twilio\Twilio::sendMessage
     * @method static \Twilio\Rest\Api\V2010\Account\MessageInstance sendMessage($to, $body, $url = null)
     * @see \Arkitecht\Twilio\Twilio::lookup
     * @method static \Twilio\Rest\Lookups\V1\PhoneNumberInstance lookup($number, $carrier = true, $name = false, $countryCode = 'US')
     * @see \Arkitecht\Twilio\Twilio::calls
     * @method static \Twilio\Rest\Api\V2010\Account\CallContext|\Twilio\Rest\Api\V2010\Account\CallList calls($args = null)
     * @see \Arkitecht\Twilio\Twilio::cleanNumber
     * @method static null|string|string[] cleanNumber($number)
     * @see \Arkitecht\Twilio\Twilio::formatNumber
     * @method static mixed|string formatNumber($number)
     * @see \Arkitecht\Twilio\Twilio::numbers
     * @method static \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext|\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberInstance[] numbers($args = null)
     * @see \Arkitecht\Twilio\Twilio::client
     * @method static \Twilio\Rest\Client client()
     * @see \Arkitecht\Twilio\Twilio::messages
     * @method static \Twilio\Rest\Api\V2010\Account\MessageContext|\Twilio\Rest\Api\V2010\Account\MessageList messages($args = null)
     * @see \Arkitecht\Twilio\Twilio::raw
     * @method static mixed raw($url, $method = 'GET', $params = [], $data = [], $headers = [])
     * @see \Arkitecht\Twilio\Twilio::makeCall
     * @method static \Twilio\Rest\Api\V2010\Account\CallInstance makeCall($to, $from, $parameters)
     * @see \Arkitecht\Twilio\Twilio::conferences
     * @method static \Twilio\Rest\Api\V2010\Account\ConferenceContext|\Twilio\Rest\Api\V2010\Account\ConferenceList conferences($args = null)
     */
    class Twilio {}
}

namespace Barryvdh\Debugbar {

    /**
     * @see \Illuminate\Support\Facades\Facade::clearResolvedInstances
     * @method static void clearResolvedInstances()
     * @see \Barryvdh\Debugbar\Facades\Debugbar::critical
     * @method static void critical($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::log
     * @method static void log($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::getCollector
     * @method static \Barryvdh\Debugbar\Facades\LaravelDebugbar getCollector(string $name)
     * @see \Illuminate\Support\Facades\Facade::shouldReceive
     * @method static \Mockery\Expectation shouldReceive()
     * @see \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @method static mixed getFacadeRoot()
     * @see \Barryvdh\Debugbar\Facades\Debugbar::emergency
     * @method static void emergency($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::error
     * @method static void error($message)
     * @see \Illuminate\Support\Facades\Facade::expects
     * @method static \Mockery\Expectation expects()
     * @see \Illuminate\Support\Facades\Facade::isFake
     * @method static bool isFake()
     * @see \Illuminate\Support\Facades\Facade::getFacadeApplication
     * @method static \Illuminate\Contracts\Foundation\Application|null getFacadeApplication()
     * @see \Illuminate\Support\Facades\Facade::setFacadeApplication
     * @method static void setFacadeApplication(\Illuminate\Contracts\Foundation\Application|null $app)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::addCollector
     * @method static \Barryvdh\Debugbar\Facades\LaravelDebugbar addCollector(\DebugBar\DataCollector\DataCollectorInterface $collector)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::alert
     * @method static void alert($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::warning
     * @method static void warning($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::info
     * @method static void info($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::notice
     * @method static void notice($message)
     * @see \Illuminate\Support\Facades\Facade::resolved
     * @method static void resolved(\Closure $callback)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::debug
     * @method static void debug($message)
     * @see \Illuminate\Support\Facades\Facade::defaultAliases
     * @method static \Illuminate\Support\Collection defaultAliases()
     * @see \Illuminate\Support\Facades\Facade::swap
     * @method static void swap($instance)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::hasCollector
     * @method static bool hasCollector(string $name)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::addMessage
     * @method static void addMessage($message, string $label = 'info')
     * @see \Illuminate\Support\Facades\Facade::clearResolvedInstance
     * @method static void clearResolvedInstance(string $name)
     * @see \Illuminate\Support\Facades\Facade::partialMock
     * @method static \Mockery\MockInterface partialMock()
     * @see \Illuminate\Support\Facades\Facade::spy
     * @method static \Mockery\MockInterface spy()
     * @see \DebugBar\DebugBar::isDataPersisted
     * @method static bool isDataPersisted()
     * @see \DebugBar\DebugBar::getCurrentRequestId
     * @method static string getCurrentRequestId()
     * @see \DebugBar\DebugBar::getData
     * @method static array getData()
     * @see LaravelDebugbar::startMeasure
     * @method static void startMeasure(string $name, string $label = null, null|string $collector = null)
     * @see \DebugBar\DebugBar::getStackedData
     * @method static array getStackedData(bool $delete = true)
     * @see LaravelDebugbar::enable
     * @method static void enable()
     * @see LaravelDebugbar::getJavascriptRenderer
     * @method static JavascriptRenderer getJavascriptRenderer(string $baseUrl = null, string $basePath = null)
     * @see LaravelDebugbar::isEnabled
     * @method static bool isEnabled()
     * @see \DebugBar\DebugBar::hasStackedData
     * @method static bool hasStackedData()
     * @see \DebugBar\DebugBar::getStorage
     * @method static \DebugBar\Storage\StorageInterface getStorage()
     * @see \DebugBar\DebugBar::getHttpDriver
     * @method static \DebugBar\HttpDriverInterface|\DebugBar\PhpHttpDriver getHttpDriver()
     * @see \DebugBar\DebugBar::getDataAsHeaders
     * @method static array getDataAsHeaders(string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
     * @see \DebugBar\DebugBar::setStackDataSessionNamespace
     * @method static \DebugBar\DebugBar setStackDataSessionNamespace(string $ns)
     * @see \DebugBar\DebugBar::setStackAlwaysUseSessionStorage
     * @method static \DebugBar\DebugBar setStackAlwaysUseSessionStorage(bool $enabled = true)
     * @see LaravelDebugbar::measure
     * @method static mixed measure(string $label, \Closure $closure, null|string $collector = null)
     * @see \DebugBar\DebugBar::offsetUnset
     * @method static void offsetUnset($key)
     * @see \DebugBar\DebugBar::stackData
     * @method static \DebugBar\DebugBar stackData()
     * @see LaravelDebugbar::modifyResponse
     * @method static \Symfony\Component\HttpFoundation\Response modifyResponse(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
     * @see LaravelDebugbar::handleError
     * @method static void handleError($level, $message, string $file = '', int $line = 0, array $context = [])
     * @see LaravelDebugbar::shouldCollect
     * @method static void shouldCollect($name, $default = false)
     * @see LaravelDebugbar::stopMeasure
     * @method static void stopMeasure(string $name)
     * @see LaravelDebugbar::collect
     * @method static array|array[] collect()
     * @see \DebugBar\DebugBar::sendDataInHeaders
     * @method static \DebugBar\DebugBar sendDataInHeaders(bool $useOpenHandler = null, string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096)
     * @see \DebugBar\DebugBar::offsetGet
     * @method static \DebugBar\DataCollector\DataCollectorInterface|mixed offsetGet($key)
     * @see LaravelDebugbar::addThrowable
     * @method static void addThrowable(\Throwable $e)
     * @see \DebugBar\DebugBar::offsetSet
     * @method static void offsetSet($key, $value)
     * @see \DebugBar\DebugBar::getRequestIdGenerator
     * @method static \DebugBar\RequestIdGenerator|\DebugBar\RequestIdGeneratorInterface getRequestIdGenerator()
     * @see \DebugBar\DebugBar::getStackDataSessionNamespace
     * @method static string getStackDataSessionNamespace()
     * @see \DebugBar\DebugBar::isStackAlwaysUseSessionStorage
     * @method static bool isStackAlwaysUseSessionStorage()
     * @see \DebugBar\DebugBar::setRequestIdGenerator
     * @method static \DebugBar\DebugBar setRequestIdGenerator(\DebugBar\RequestIdGeneratorInterface $generator)
     * @see \DebugBar\DebugBar::setHttpDriver
     * @method static \DebugBar\DebugBar setHttpDriver(\DebugBar\HttpDriverInterface $driver)
     * @see \DebugBar\DebugBar::offsetExists
     * @method static bool offsetExists($key)
     * @see LaravelDebugbar::boot
     * @method static void boot()
     * @see LaravelDebugbar::collectConsole
     * @method static array|array[] collectConsole()
     * @see LaravelDebugbar::addException
     * @method static void addException(\Exception $e)
     * @see LaravelDebugbar::injectDebugbar
     * @method static void injectDebugbar(\Symfony\Component\HttpFoundation\Response $response)
     * @see LaravelDebugbar::addMeasure
     * @method static void addMeasure(string $label, float $start, float $end, array|null $params = [], null|string $collector = null)
     * @see \DebugBar\DebugBar::setStorage
     * @method static \DebugBar\DebugBar setStorage(\DebugBar\Storage\StorageInterface $storage = null)
     * @see LaravelDebugbar::disable
     * @method static void disable()
     * @see \DebugBar\DebugBar::getCollectors
     * @method static array getCollectors()
     */
    class Facade {}
}

namespace Barryvdh\Debugbar\Facades {

    /**
     * @see \DebugBar\DebugBar::isDataPersisted
     * @method static bool isDataPersisted()
     * @see \DebugBar\DebugBar::getCurrentRequestId
     * @method static string getCurrentRequestId()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::emergency
     * @method static void emergency(...$message)
     * @see \DebugBar\DebugBar::getData
     * @method static array getData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::startMeasure
     * @method static void startMeasure(string $name, string $label = null, null|string $collector = null)
     * @see \DebugBar\DebugBar::getStackedData
     * @method static array getStackedData(bool $delete = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addCollector
     * @method static \Barryvdh\Debugbar\LaravelDebugbar addCollector(\DebugBar\DataCollector\DataCollectorInterface $collector)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::enable
     * @method static void enable()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::warning
     * @method static void warning(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::getJavascriptRenderer
     * @method static \Barryvdh\Debugbar\JavascriptRenderer getJavascriptRenderer(string $baseUrl = null, string $basePath = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::isEnabled
     * @method static bool isEnabled()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::info
     * @method static void info(...$message)
     * @see \DebugBar\DebugBar::hasStackedData
     * @method static bool hasStackedData()
     * @see \DebugBar\DebugBar::getStorage
     * @method static \DebugBar\Storage\StorageInterface getStorage()
     * @see \DebugBar\DebugBar::getHttpDriver
     * @method static \DebugBar\HttpDriverInterface|\DebugBar\PhpHttpDriver getHttpDriver()
     * @see \DebugBar\DebugBar::getDataAsHeaders
     * @method static array getDataAsHeaders(string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
     * @see \DebugBar\DebugBar::hasCollector
     * @method static bool hasCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMessage
     * @method static void addMessage($message, string $label = 'info')
     * @see \DebugBar\DebugBar::setStackDataSessionNamespace
     * @method static \DebugBar\DebugBar setStackDataSessionNamespace(string $ns)
     * @see \DebugBar\DebugBar::setStackAlwaysUseSessionStorage
     * @method static \DebugBar\DebugBar setStackAlwaysUseSessionStorage(bool $enabled = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::measure
     * @method static mixed measure(string $label, \Closure $closure, null|string $collector = null)
     * @see \DebugBar\DebugBar::offsetUnset
     * @method static void offsetUnset($key)
     * @see \DebugBar\DebugBar::stackData
     * @method static \DebugBar\DebugBar stackData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::modifyResponse
     * @method static \Symfony\Component\HttpFoundation\Response modifyResponse(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::handleError
     * @method static void handleError($level, $message, string $file = '', int $line = 0, array $context = [])
     * @see \Barryvdh\Debugbar\LaravelDebugbar::shouldCollect
     * @method static void shouldCollect($name, $default = false)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::stopMeasure
     * @method static void stopMeasure(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collect
     * @method static array|array[] collect()
     * @see \DebugBar\DebugBar::sendDataInHeaders
     * @method static \DebugBar\DebugBar sendDataInHeaders(bool $useOpenHandler = null, string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096)
     * @see \DebugBar\DebugBar::offsetGet
     * @method static \DebugBar\DataCollector\DataCollectorInterface|mixed offsetGet($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addThrowable
     * @method static void addThrowable(\Throwable $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::critical
     * @method static void critical(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::log
     * @method static void log(...$message)
     * @see \DebugBar\DebugBar::getCollector
     * @method static \DebugBar\DataCollector\DataCollectorInterface getCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::error
     * @method static void error(...$message)
     * @see \DebugBar\DebugBar::offsetSet
     * @method static void offsetSet($key, $value)
     * @see \DebugBar\DebugBar::getRequestIdGenerator
     * @method static \DebugBar\RequestIdGenerator|\DebugBar\RequestIdGeneratorInterface getRequestIdGenerator()
     * @see \DebugBar\DebugBar::getStackDataSessionNamespace
     * @method static string getStackDataSessionNamespace()
     * @see \DebugBar\DebugBar::isStackAlwaysUseSessionStorage
     * @method static bool isStackAlwaysUseSessionStorage()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::alert
     * @method static void alert(...$message)
     * @see \DebugBar\DebugBar::setRequestIdGenerator
     * @method static \DebugBar\DebugBar setRequestIdGenerator(\DebugBar\RequestIdGeneratorInterface $generator)
     * @see \DebugBar\DebugBar::setHttpDriver
     * @method static \DebugBar\DebugBar setHttpDriver(\DebugBar\HttpDriverInterface $driver)
     * @see \DebugBar\DebugBar::offsetExists
     * @method static bool offsetExists($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::boot
     * @method static void boot()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collectConsole
     * @method static array|array[] collectConsole()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::notice
     * @method static void notice(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::debug
     * @method static void debug(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addException
     * @method static void addException(\Exception $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::injectDebugbar
     * @method static void injectDebugbar(\Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMeasure
     * @method static void addMeasure(string $label, float $start, float $end, array|null $params = [], null|string $collector = null)
     * @see \DebugBar\DebugBar::setStorage
     * @method static \DebugBar\DebugBar setStorage(\DebugBar\Storage\StorageInterface $storage = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::disable
     * @method static void disable()
     * @see \DebugBar\DebugBar::getCollectors
     * @method static array getCollectors()
     */
    class Debugbar {}
}

namespace Collective\Html {

    /**
     * @see FormBuilder::date
     * @method static \Illuminate\Support\HtmlString date(string $name, string $value = null, array $options = [])
     * @see FormBuilder::select
     * @method static \Illuminate\Support\HtmlString select(string $name, array $list = [], bool|string $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])
     * @see FormBuilder::considerRequest
     * @method static void considerRequest(bool $consider = true)
     * @see FormBuilder::getModel
     * @method static mixed getModel()
     * @see FormBuilder::textarea
     * @method static \Illuminate\Support\HtmlString textarea(string $name, string $value = null, array $options = [])
     * @see FormBuilder::radio
     * @method static \Illuminate\Support\HtmlString radio(string $name, $value = null, bool $checked = null, array $options = [])
     * @see FormBuilder::number
     * @method static \Illuminate\Support\HtmlString number(string $name, string $value = null, array $options = [])
     * @see FormBuilder::datetime
     * @method static \Illuminate\Support\HtmlString datetime(string $name, string $value = null, array $options = [])
     * @see FormBuilder::password
     * @method static \Illuminate\Support\HtmlString password(string $name, array $options = [])
     * @see FormBuilder::tel
     * @method static \Illuminate\Support\HtmlString tel(string $name, string $value = null, array $options = [])
     * @see FormBuilder::model
     * @method static \Illuminate\Support\HtmlString model($model, array $options = [])
     * @see FormBuilder::getSelectOption
     * @method static \Illuminate\Support\HtmlString getSelectOption(string $display, string $value, string $selected, array $attributes = [], array $optgroupAttributes = [])
     * @see FormBuilder::selectRange
     * @method static \Illuminate\Support\HtmlString selectRange(string $name, string $begin, string $end, string $selected = null, array $options = [])
     * @see FormBuilder::text
     * @method static \Illuminate\Support\HtmlString text(string $name, string $value = null, array $options = [])
     * @see FormBuilder::selectMonth
     * @method static \Illuminate\Support\HtmlString selectMonth(string $name, string $selected = null, array $options = [], string $format = '%B')
     * @see FormBuilder::image
     * @method static \Illuminate\Support\HtmlString image(string $url, string $name = null, array $attributes = [])
     * @see FormBuilder::setModel
     * @method static void setModel($model)
     * @see FormBuilder::old
     * @method static array|mixed old(string $name)
     * @see FormBuilder::datetimeLocal
     * @method static \Illuminate\Support\HtmlString datetimeLocal(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see FormBuilder::input
     * @method static \Illuminate\Support\HtmlString input(string $type, string $name, string $value = null, array $options = [])
     * @see FormBuilder::month
     * @method static \Illuminate\Support\HtmlString month(string $name, string $value = null, array $options = [])
     * @see FormBuilder::getSessionStore
     * @method static \Illuminate\Contracts\Session\Session getSessionStore()
     * @see FormBuilder::reset
     * @method static \Illuminate\Support\HtmlString reset(string $value, array $attributes = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see FormBuilder::week
     * @method static \Illuminate\Support\HtmlString week(string $name, string $value = null, array $options = [])
     * @see FormBuilder::color
     * @method static \Illuminate\Support\HtmlString color(string $name, string $value = null, array $options = [])
     * @see FormBuilder::submit
     * @method static \Illuminate\Support\HtmlString submit(string $value = null, array $options = [])
     * @see FormBuilder::hidden
     * @method static \Illuminate\Support\HtmlString hidden(string $name, string $value = null, array $options = [])
     * @see FormBuilder::range
     * @method static \Illuminate\Support\HtmlString range(string $name, string $value = null, array $options = [])
     * @see FormBuilder::getValueAttribute
     * @method static array|mixed|null|string getValueAttribute(string $name, string $value = null)
     * @see FormBuilder::setSessionStore
     * @method static FormBuilder setSessionStore(\Illuminate\Contracts\Session\Session $session)
     * @see FormBuilder::button
     * @method static \Illuminate\Support\HtmlString button(string $value = null, array $options = [])
     * @see FormBuilder::search
     * @method static \Illuminate\Support\HtmlString search(string $name, string $value = null, array $options = [])
     * @see FormBuilder::file
     * @method static \Illuminate\Support\HtmlString file(string $name, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see FormBuilder::checkbox
     * @method static \Illuminate\Support\HtmlString checkbox(string $name, $value = 1, bool $checked = null, array $options = [])
     * @see FormBuilder::close
     * @method static \Illuminate\Support\HtmlString|string close()
     * @see FormBuilder::email
     * @method static \Illuminate\Support\HtmlString email(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see FormBuilder::oldInputIsEmpty
     * @method static bool oldInputIsEmpty()
     * @see FormBuilder::selectYear
     * @method static mixed selectYear()
     * @see FormBuilder::datalist
     * @method static \Illuminate\Support\HtmlString datalist(string $id, array $list = [])
     * @see Componentable::componentCall
     * @method static \Illuminate\Contracts\View\View|mixed componentCall(string $method, array $parameters)
     * @see FormBuilder::label
     * @method static \Illuminate\Support\HtmlString label(string $name, string $value = null, array $options = [], bool $escape_html = true)
     * @see FormBuilder::url
     * @method static \Illuminate\Support\HtmlString url(string $name, string $value = null, array $options = [])
     * @see FormBuilder::token
     * @method static \Illuminate\Support\HtmlString|string token()
     * @see Componentable::component
     * @method static void component($name, $view, array $signature)
     * @see FormBuilder::getIdAttribute
     * @method static string getIdAttribute(string $name, array $attributes)
     * @see FormBuilder::time
     * @method static \Illuminate\Support\HtmlString time(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see Componentable::hasComponent
     * @method static bool hasComponent($name)
     * @see FormBuilder::open
     * @method static \Illuminate\Support\HtmlString open(array $options = [])
     */
    class FormFacade {}

    /**
     * @see HtmlBuilder::linkSecureAsset
     * @method static \Illuminate\Support\HtmlString linkSecureAsset(string $url, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::link
     * @method static \Illuminate\Support\HtmlString link(string $url, string $title = null, array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::dl
     * @method static \Illuminate\Support\HtmlString dl(array $list, array $attributes = [])
     * @see HtmlBuilder::linkAction
     * @method static \Illuminate\Support\HtmlString linkAction(string $action, string $title = null, array $parameters = [], array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::decode
     * @method static string decode(string $value)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see HtmlBuilder::ul
     * @method static \Illuminate\Support\HtmlString|string ul(array $list, array $attributes = [])
     * @see HtmlBuilder::tag
     * @method static \Illuminate\Support\HtmlString tag(string $tag, $content, array $attributes = [])
     * @see HtmlBuilder::ol
     * @method static \Illuminate\Support\HtmlString|string ol(array $list, array $attributes = [])
     * @see HtmlBuilder::email
     * @method static string email(string $email)
     * @see HtmlBuilder::image
     * @method static \Illuminate\Support\HtmlString image(string $url, string $alt = null, array $attributes = [], bool $secure = null)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see HtmlBuilder::nbsp
     * @method static string nbsp(int $num = 1)
     * @see HtmlBuilder::obfuscate
     * @method static string obfuscate(string $value)
     * @see HtmlBuilder::secureLink
     * @method static \Illuminate\Support\HtmlString secureLink(string $url, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::favicon
     * @method static \Illuminate\Support\HtmlString favicon(string $url, array $attributes = [], bool $secure = null)
     * @see Componentable::componentCall
     * @method static \Illuminate\Contracts\View\View|mixed componentCall(string $method, array $parameters)
     * @see HtmlBuilder::script
     * @method static \Illuminate\Support\HtmlString script(string $url, array $attributes = [], bool $secure = null)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see Componentable::component
     * @method static void component($name, $view, array $signature)
     * @see HtmlBuilder::entities
     * @method static string entities(string $value)
     * @see HtmlBuilder::meta
     * @method static \Illuminate\Support\HtmlString meta(string $name, string $content, array $attributes = [])
     * @see HtmlBuilder::linkRoute
     * @method static \Illuminate\Support\HtmlString linkRoute(string $name, string $title = null, array $parameters = [], array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::style
     * @method static \Illuminate\Support\HtmlString style(string $url, array $attributes = [], bool $secure = null)
     * @see HtmlBuilder::mailto
     * @method static \Illuminate\Support\HtmlString mailto(string $email, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::attributes
     * @method static string attributes(array $attributes)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see Componentable::hasComponent
     * @method static bool hasComponent($name)
     * @see HtmlBuilder::linkAsset
     * @method static \Illuminate\Support\HtmlString linkAsset(string $url, string $title = null, array $attributes = [], bool $secure = null, bool $escape = true)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class HtmlFacade {}
}

namespace Illuminate\Support\Facades {

    /**
     * @see \Illuminate\Foundation\Application::currentLocale
     * @method static string currentLocale()
     * @see \Illuminate\Foundation\Application::basePath
     * @method static string basePath(string $path = '')
     * @see \Illuminate\Foundation\Application::registered
     * @method static void registered(callable $callback)
     * @see \Illuminate\Foundation\Application::shouldMergeFrameworkConfiguration
     * @method static bool shouldMergeFrameworkConfiguration()
     * @see \Illuminate\Foundation\Application::addAbsoluteCachePathPrefix
     * @method static \Illuminate\Foundation\Application addAbsoluteCachePathPrefix(string $prefix)
     * @see \Illuminate\Container\Container::when
     * @method static \Illuminate\Container\ContextualBindingBuilder|\Illuminate\Contracts\Container\ContextualBindingBuilder when(array|string $concrete)
     * @see \Illuminate\Foundation\Application::resourcePath
     * @method static string resourcePath(string $path = '')
     * @see \Illuminate\Foundation\Application::path
     * @method static string path(string $path = '')
     * @see \Illuminate\Container\Container::bind
     * @method static void bind(string $abstract, null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Container\Container::tagged
     * @method static array|\Illuminate\Container\RewindableGenerator|iterable tagged(string $tag)
     * @see \Illuminate\Foundation\Application::setDeferredServices
     * @method static void setDeferredServices(array $services)
     * @see \Illuminate\Foundation\Application::viewPath
     * @method static string viewPath(string $path = '')
     * @see \Illuminate\Foundation\Application::getDeferredServices
     * @method static array getDeferredServices()
     * @see \Illuminate\Foundation\Application::getFallbackLocale
     * @method static string getFallbackLocale()
     * @see \Illuminate\Foundation\Application::registerDeferredProvider
     * @method static void registerDeferredProvider(string $provider, null|string $service = null)
     * @see \Illuminate\Foundation\Application::handle
     * @method static \Symfony\Component\HttpFoundation\Response handle(\Symfony\Component\HttpFoundation\Request $request, int $type = self::MAIN_REQUEST, bool $catch = true)
     * @see \Illuminate\Container\Container::whenHasAttribute
     * @method static void whenHasAttribute(string $attribute, \Closure $handler)
     * @see \Illuminate\Container\Container::bindIf
     * @method static void bindIf(string $abstract, null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Foundation\Application::version
     * @method static string version()
     * @see \Illuminate\Container\Container::rebinding
     * @method static mixed|object rebinding(string $abstract, \Closure $callback)
     * @see \Illuminate\Container\Container::extend
     * @method static void extend(string $abstract, \Closure $closure)
     * @see \Illuminate\Foundation\Application::useStoragePath
     * @method static \Illuminate\Foundation\Application useStoragePath(string $path)
     * @see \Illuminate\Container\Container::forgetScopedInstances
     * @method static void forgetScopedInstances()
     * @see \Illuminate\Foundation\Application::hasBeenBootstrapped
     * @method static bool hasBeenBootstrapped()
     * @see \Illuminate\Container\Container::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Foundation\Application::setFallbackLocale
     * @method static void setFallbackLocale(string $fallbackLocale)
     * @see \Illuminate\Foundation\Application::loadEnvironmentFrom
     * @method static \Illuminate\Foundation\Application loadEnvironmentFrom(string $file)
     * @see \Illuminate\Container\Container::setInstance
     * @method static \Illuminate\Container\Container|\Illuminate\Contracts\Container\Container|null setInstance(\Illuminate\Contracts\Container\Container|null $container = null)
     * @see \Illuminate\Foundation\Application::terminate
     * @method static void terminate()
     * @see \Illuminate\Foundation\Application::environmentFile
     * @method static string environmentFile()
     * @see \Illuminate\Foundation\Application::provideFacades
     * @method static void provideFacades(string $namespace)
     * @see \Illuminate\Foundation\Application::runningUnitTests
     * @method static bool runningUnitTests()
     * @see \Illuminate\Foundation\Application::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Foundation\Application::bootstrapPath
     * @method static string bootstrapPath(string $path = '')
     * @see \Illuminate\Foundation\Application::maintenanceMode
     * @method static \Illuminate\Contracts\Foundation\MaintenanceMode maintenanceMode()
     * @see \Illuminate\Foundation\Application::resolveProvider
     * @method static \Illuminate\Support\ServiceProvider resolveProvider(string $provider)
     * @see \Illuminate\Foundation\Application::detectEnvironment
     * @method static string detectEnvironment(\Closure $callback)
     * @see \Illuminate\Foundation\Application::isLocal
     * @method static bool isLocal()
     * @see \Illuminate\Container\Container::getAlias
     * @method static string getAlias(string $abstract)
     * @see \Illuminate\Foundation\Application::getCachedServicesPath
     * @method static string getCachedServicesPath()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Container\Container::isAlias
     * @method static bool isAlias(string $name)
     * @see \Illuminate\Foundation\Application::getProviders
     * @method static array getProviders(\Illuminate\Support\ServiceProvider|string $provider)
     * @see \Illuminate\Foundation\Application::registerConfiguredProviders
     * @method static void registerConfiguredProviders()
     * @see \Illuminate\Container\Container::get
     * @method static mixed|object get(string $id)
     * @see \Illuminate\Foundation\Application::getCachedPackagesPath
     * @method static string getCachedPackagesPath()
     * @see \Illuminate\Foundation\Application::isLocale
     * @method static bool isLocale(string $locale)
     * @see \Illuminate\Foundation\Application::getNamespace
     * @method static string getNamespace()
     * @see \Illuminate\Container\Container::scopedIf
     * @method static void scopedIf(string $abstract, null|string $concrete = null)
     * @see \Illuminate\Container\Container::resolved
     * @method static bool resolved(string $abstract)
     * @see \Illuminate\Container\Container::fireAfterResolvingAttributeCallbacks
     * @method static void fireAfterResolvingAttributeCallbacks(array $attributes, $object)
     * @see \Illuminate\Foundation\Application::getProvider
     * @method static \Illuminate\Support\ServiceProvider|null getProvider(\Illuminate\Support\ServiceProvider|string $provider)
     * @see \Illuminate\Container\Container::refresh
     * @method static mixed|object refresh(string $abstract, $target, string $method)
     * @see \Illuminate\Foundation\Application::registerCoreContainerAliases
     * @method static void registerCoreContainerAliases()
     * @see \Illuminate\Foundation\Application::useDatabasePath
     * @method static \Illuminate\Foundation\Application useDatabasePath(string $path)
     * @see \Illuminate\Foundation\Application::environmentFilePath
     * @method static string environmentFilePath()
     * @see \Illuminate\Foundation\Application::shouldSkipMiddleware
     * @method static bool shouldSkipMiddleware()
     * @see \Illuminate\Foundation\Application::booting
     * @method static void booting(callable $callback)
     * @see \Illuminate\Container\Container::call
     * @method static mixed call(callable|string $callback, array $parameters = [], null|string $defaultMethod = null)
     * @see \Illuminate\Container\Container::scoped
     * @method static void scoped(string $abstract, null|string $concrete = null)
     * @see \Illuminate\Foundation\Application::isProduction
     * @method static bool isProduction()
     * @see \Illuminate\Foundation\Application::joinPaths
     * @method static string joinPaths(string $basePath, string $path = '')
     * @see \Illuminate\Foundation\Application::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Foundation\Application::getCachedEventsPath
     * @method static string getCachedEventsPath()
     * @see \Illuminate\Foundation\Application::terminating
     * @method static \Illuminate\Foundation\Application terminating(callable|string $callback)
     * @see \Illuminate\Container\Container::callMethodBinding
     * @method static mixed callMethodBinding(string $method, $instance)
     * @see \Illuminate\Foundation\Application::beforeBootstrapping
     * @method static void beforeBootstrapping(string $bootstrapper, \Closure $callback)
     * @see \Illuminate\Container\Container::wrap
     * @method static \Closure wrap(\Closure $callback, array $parameters = [])
     * @see \Illuminate\Foundation\Application::register
     * @method static \Illuminate\Support\ServiceProvider|null|string register(\Illuminate\Support\ServiceProvider|string $provider, bool $force = false)
     * @see \Illuminate\Foundation\Application::environmentPath
     * @method static string environmentPath()
     * @see \Illuminate\Foundation\Application::addDeferredServices
     * @method static void addDeferredServices(array $services)
     * @see \Illuminate\Foundation\Application::useAppPath
     * @method static \Illuminate\Foundation\Application useAppPath(string $path)
     * @see \Illuminate\Container\Container::instance
     * @method static mixed instance(string $abstract, $instance)
     * @see \Illuminate\Foundation\Application::getBootstrapProvidersPath
     * @method static string getBootstrapProvidersPath()
     * @see \Illuminate\Container\Container::singletonIf
     * @method static void singletonIf(string $abstract, null|string $concrete = null)
     * @see \Illuminate\Foundation\Application::databasePath
     * @method static string databasePath(string $path = '')
     * @see \Illuminate\Foundation\Application::eventsAreCached
     * @method static bool eventsAreCached()
     * @see \Illuminate\Container\Container::forgetInstances
     * @method static void forgetInstances()
     * @see \Illuminate\Foundation\Application::storagePath
     * @method static string storagePath(string $path = '')
     * @see \Illuminate\Foundation\Application::loadDeferredProvider
     * @method static void loadDeferredProvider(string $service)
     * @see \Illuminate\Foundation\Application::booted
     * @method static void booted(callable $callback)
     * @see \Illuminate\Foundation\Application::routesAreCached
     * @method static bool routesAreCached()
     * @see \Illuminate\Container\Container::has
     * @method static bool has(string $id)
     * @see \Illuminate\Container\Container::tag
     * @method static void tag(array|string $abstracts, array|array[] $tags)
     * @see \Illuminate\Foundation\Application::publicPath
     * @method static string publicPath(string $path = '')
     * @see \Illuminate\Container\Container::addContextualBinding
     * @method static void addContextualBinding(string $concrete, string $abstract, string $implementation)
     * @see \Illuminate\Container\Container::hasMethodBinding
     * @method static bool hasMethodBinding(string $method)
     * @see \Illuminate\Foundation\Application::useConfigPath
     * @method static \Illuminate\Foundation\Application useConfigPath(string $path)
     * @see \Illuminate\Foundation\Application::isDownForMaintenance
     * @method static bool isDownForMaintenance()
     * @see \Illuminate\Foundation\Application::usePublicPath
     * @method static \Illuminate\Foundation\Application usePublicPath(string $path)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Foundation\Application::loadDeferredProviders
     * @method static void loadDeferredProviders()
     * @see \Illuminate\Foundation\Application::abort
     * @method static \Illuminate\Foundation\never abort(int $code, string $message = '', array $headers = [])
     * @see \Illuminate\Container\Container::afterResolving
     * @method static void afterResolving(string $abstract, \Closure|null $callback = null)
     * @see \Illuminate\Foundation\Application::afterBootstrapping
     * @method static void afterBootstrapping(string $bootstrapper, \Closure $callback)
     * @see \Illuminate\Foundation\Application::providerIsLoaded
     * @method static bool providerIsLoaded(string $provider)
     * @see \Illuminate\Foundation\Application::configurationIsCached
     * @method static bool configurationIsCached()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Foundation\Application::runningInConsole
     * @method static bool|null runningInConsole()
     * @see \Illuminate\Container\Container::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Foundation\Application::langPath
     * @method static string langPath(string $path = '')
     * @see \Illuminate\Container\Container::afterResolvingAttribute
     * @method static void afterResolvingAttribute(string $attribute, \Closure $callback)
     * @see \Illuminate\Foundation\Application::useLangPath
     * @method static \Illuminate\Foundation\Application useLangPath(string $path)
     * @see \Illuminate\Container\Container::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Foundation\Application::dontMergeFrameworkConfiguration
     * @method static \Illuminate\Foundation\Application dontMergeFrameworkConfiguration()
     * @see \Illuminate\Container\Container::makeWith
     * @method static mixed|object makeWith(callable|string $abstract, array $parameters = [])
     * @see \Illuminate\Foundation\Application::hasDebugModeEnabled
     * @method static bool hasDebugModeEnabled()
     * @see \Illuminate\Foundation\Application::inferBasePath
     * @method static string inferBasePath()
     * @see \Illuminate\Container\Container::beforeResolving
     * @method static void beforeResolving(string $abstract, \Closure|null $callback = null)
     * @see \Illuminate\Foundation\Application::flush
     * @method static void flush()
     * @see \Illuminate\Container\Container::alias
     * @method static void alias(string $abstract, string $alias)
     * @see \Illuminate\Container\Container::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Foundation\Application::afterLoadingEnvironment
     * @method static void afterLoadingEnvironment(\Closure $callback)
     * @see \Illuminate\Foundation\Application::boot
     * @method static void boot()
     * @see \Illuminate\Foundation\Application::make
     * @method static mixed make(string $abstract, array $parameters = [])
     * @see \Illuminate\Container\Container::forgetExtenders
     * @method static void forgetExtenders(string $abstract)
     * @see \Illuminate\Foundation\Application::useBootstrapPath
     * @method static \Illuminate\Foundation\Application useBootstrapPath(string $path)
     * @see \Illuminate\Foundation\Application::bootstrapWith
     * @method static void bootstrapWith(array $bootstrappers)
     * @see \Illuminate\Container\Container::singleton
     * @method static void singleton(string $abstract, null|string $concrete = null)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Container\Container::factory
     * @method static \Closure factory(string $abstract)
     * @see \Illuminate\Container\Container::forgetInstance
     * @method static void forgetInstance(string $abstract)
     * @see \Illuminate\Container\Container::isShared
     * @method static bool isShared(string $abstract)
     * @see \Illuminate\Foundation\Application::handleRequest
     * @method static void handleRequest(\Illuminate\Http\Request $request)
     * @see \Illuminate\Container\Container::resolving
     * @method static void resolving(string $abstract, \Closure|null $callback = null)
     * @see \Illuminate\Foundation\Application::bound
     * @method static bool bound(string $abstract)
     * @see \Illuminate\Foundation\Application::runningConsoleCommand
     * @method static bool runningConsoleCommand(...$commands)
     * @see \Illuminate\Foundation\Application::isBooted
     * @method static bool isBooted()
     * @see \Illuminate\Foundation\Application::configure
     * @method static \Illuminate\Foundation\Configuration\ApplicationBuilder configure(null|string $basePath = null)
     * @see \Illuminate\Container\Container::resolveFromAttribute
     * @method static mixed resolveFromAttribute(\ReflectionAttribute $attribute)
     * @see \Illuminate\Foundation\Application::getCachedRoutesPath
     * @method static string getCachedRoutesPath()
     * @see \Illuminate\Container\Container::getBindings
     * @method static array|array[] getBindings()
     * @see \Illuminate\Foundation\Application::useEnvironmentPath
     * @method static \Illuminate\Foundation\Application useEnvironmentPath(string $path)
     * @see \Illuminate\Foundation\Application::setBasePath
     * @method static \Illuminate\Foundation\Application setBasePath(string $basePath)
     * @see \Illuminate\Foundation\Application::environment
     * @method static bool|string environment(...$environments)
     * @see \Illuminate\Foundation\Application::isDeferredService
     * @method static bool isDeferredService(string $service)
     * @see \Illuminate\Container\Container::build
     * @method static mixed build(string $concrete)
     * @see \Illuminate\Foundation\Application::getCachedConfigPath
     * @method static string getCachedConfigPath()
     * @see \Illuminate\Foundation\Application::handleCommand
     * @method static int handleCommand(\Symfony\Component\Console\Input\InputInterface $input)
     * @see \Illuminate\Foundation\Application::configPath
     * @method static string configPath(string $path = '')
     * @see \Illuminate\Container\Container::bindMethod
     * @method static void bindMethod(array|string $method, $callback)
     * @see \Illuminate\Foundation\Application::getLoadedProviders
     * @method static bool[] getLoadedProviders()
     * @see \Illuminate\Container\Container::getInstance
     * @method static \Illuminate\Container\Container getInstance()
     */
    class App {}

    /**
     * @see \Illuminate\Foundation\Console\Kernel::addCommands
     * @method static \Illuminate\Foundation\Console\Kernel addCommands(array $commands)
     * @see \Illuminate\Foundation\Console\Kernel::setArtisan
     * @method static void setArtisan(\Illuminate\Console\Application|null $artisan)
     * @see \Illuminate\Foundation\Console\Kernel::addCommandRoutePaths
     * @method static \Illuminate\Foundation\Console\Kernel addCommandRoutePaths(array $paths)
     * @see \Illuminate\Foundation\Console\Kernel::resolveConsoleSchedule
     * @method static \Illuminate\Console\Scheduling\Schedule resolveConsoleSchedule()
     * @see \Illuminate\Foundation\Console\Kernel::bootstrap
     * @method static void bootstrap()
     * @see \Illuminate\Foundation\Console\Kernel::output
     * @method static string output()
     * @see \Illuminate\Foundation\Console\Kernel::addCommandPaths
     * @method static \Illuminate\Foundation\Console\Kernel addCommandPaths(array $paths)
     * @see \Illuminate\Foundation\Console\Kernel::whenCommandLifecycleIsLongerThan
     * @method static void whenCommandLifecycleIsLongerThan(\Carbon\CarbonInterval|\DateTimeInterface|float|int $threshold, callable $handler)
     * @see \Illuminate\Foundation\Console\Kernel::rerouteSymfonyCommandEvents
     * @method static \Illuminate\Foundation\Console\Kernel rerouteSymfonyCommandEvents()
     * @see \Illuminate\Foundation\Console\Kernel::all
     * @method static array all()
     * @see \Illuminate\Foundation\Console\Kernel::handle
     * @method static int handle(\Symfony\Component\Console\Input\InputInterface $input, null|\Symfony\Component\Console\Output\OutputInterface $output = null)
     * @see \Illuminate\Foundation\Console\Kernel::bootstrapWithoutBootingProviders
     * @method static void bootstrapWithoutBootingProviders()
     * @see \Illuminate\Foundation\Console\Kernel::command
     * @method static \Illuminate\Foundation\Console\ClosureCommand command(string $signature, \Closure $callback)
     * @see \Illuminate\Foundation\Console\Kernel::commandStartedAt
     * @method static \Illuminate\Support\Carbon|null commandStartedAt()
     * @see \Illuminate\Foundation\Console\Kernel::call
     * @method static int call(string $command, array $parameters = [], null|\Symfony\Component\Console\Output\OutputInterface $outputBuffer = null)
     * @see \Illuminate\Foundation\Console\Kernel::registerCommand
     * @method static void registerCommand(\Symfony\Component\Console\Command\Command $command)
     * @see \Illuminate\Foundation\Console\Kernel::terminate
     * @method static void terminate(\Symfony\Component\Console\Input\InputInterface $input, int $status)
     * @see \Illuminate\Foundation\Console\Kernel::queue
     * @method static \Illuminate\Foundation\Bus\PendingDispatch queue(string $command, array $parameters = [])
     */
    class Artisan {}

    /**
     * @see \Illuminate\Auth\AuthManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Auth\AuthManager::guard
     * @method static \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard guard(null|string $name = null)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::onceUsingId
     * @method static false|\Illuminate\Contracts\Auth\Authenticatable onceUsingId($id)
     * @see \Illuminate\Auth\CreatesUserProviders::createUserProvider
     * @method static \Illuminate\Contracts\Auth\UserProvider|null createUserProvider(null|string $provider = null)
     * @see \Illuminate\Auth\AuthManager::createTokenDriver
     * @method static \Illuminate\Auth\TokenGuard createTokenDriver(string $name, array $config)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::login
     * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember = false)
     * @see \Illuminate\Auth\AuthManager::viaRequest
     * @method static \Illuminate\Auth\AuthManager viaRequest(string $driver, callable $callback)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::attempt
     * @method static bool attempt(array $credentials = [], bool $remember = false)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::viaRemember
     * @method static bool viaRemember()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::logout
     * @method static void logout()
     * @see \Illuminate\Auth\AuthManager::provider
     * @method static \Illuminate\Auth\AuthManager provider(string $name, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::userResolver
     * @method static \Closure userResolver()
     * @see \Illuminate\Auth\AuthManager::setApplication
     * @method static \Illuminate\Auth\AuthManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Contracts\Auth\Guard::id
     * @method static int|null|string id()
     * @see \Illuminate\Contracts\Auth\Guard::validate
     * @method static bool validate(array $credentials = [])
     * @see \Illuminate\Auth\CreatesUserProviders::getDefaultUserProvider
     * @method static string getDefaultUserProvider()
     * @see \Illuminate\Auth\AuthManager::forgetGuards
     * @method static \Illuminate\Auth\AuthManager forgetGuards()
     * @see \Illuminate\Auth\AuthManager::shouldUse
     * @method static void shouldUse(string $name)
     * @see \Illuminate\Contracts\Auth\Guard::check
     * @method static bool check()
     * @see \Illuminate\Auth\AuthManager::extend
     * @method static \Illuminate\Auth\AuthManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::hasResolvedGuards
     * @method static bool hasResolvedGuards()
     * @see \Illuminate\Contracts\Auth\Guard::setUser
     * @method static \Illuminate\Contracts\Auth\Guard setUser(\Illuminate\Contracts\Auth\Authenticatable $user)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::once
     * @method static bool once(array $credentials = [])
     * @see \Illuminate\Auth\AuthManager::resolveUsersUsing
     * @method static \Illuminate\Auth\AuthManager resolveUsersUsing(\Closure $userResolver)
     * @see \Illuminate\Auth\AuthManager::createSessionDriver
     * @method static \Illuminate\Auth\SessionGuard createSessionDriver(string $name, array $config)
     * @see \Illuminate\Contracts\Auth\Guard::guest
     * @method static bool guest()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::loginUsingId
     * @method static false|\Illuminate\Contracts\Auth\Authenticatable loginUsingId($id, bool $remember = false)
     * @see \Illuminate\Contracts\Auth\Guard::hasUser
     * @method static bool hasUser()
     * @see \Illuminate\Contracts\Auth\Guard::user
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null user()
     * @see \Illuminate\Auth\AuthManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Auth\SessionGuard::getTimebox
     * @method static \Illuminate\Support\Timebox getTimebox()
     * @see \Illuminate\Auth\SessionGuard::attemptWhen
     * @method static bool attemptWhen(array $credentials = [], array|callable|null $callbacks = null, bool $remember = false)
     * @see \Illuminate\Auth\GuardHelpers::setProvider
     * @method static void setProvider(\Illuminate\Contracts\Auth\UserProvider $provider)
     * @see \Illuminate\Auth\SessionGuard::getRequest
     * @method static \Symfony\Component\HttpFoundation\Request getRequest()
     * @see \Illuminate\Auth\SessionGuard::getRecallerName
     * @method static string getRecallerName()
     * @see \Illuminate\Auth\SessionGuard::setRememberDuration
     * @method static \Illuminate\Auth\SessionGuard setRememberDuration(int $minutes)
     * @see \Illuminate\Auth\SessionGuard::logoutCurrentDevice
     * @method static void logoutCurrentDevice()
     * @see \Illuminate\Auth\SessionGuard::logoutOtherDevices
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null logoutOtherDevices(string $password)
     * @see \Illuminate\Auth\SessionGuard::onceBasic
     * @method static null|\Symfony\Component\HttpFoundation\Response onceBasic(string $field = 'email', array $extraConditions = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Auth\SessionGuard::getUser
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null getUser()
     * @see \Illuminate\Auth\SessionGuard::setRequest
     * @method static \Illuminate\Auth\SessionGuard setRequest(\Symfony\Component\HttpFoundation\Request $request)
     * @see \Illuminate\Auth\SessionGuard::basic
     * @method static null|\Symfony\Component\HttpFoundation\Response basic(string $field = 'email', array $extraConditions = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Auth\GuardHelpers::authenticate
     * @method static \Illuminate\Contracts\Auth\Authenticatable authenticate()
     * @see \Illuminate\Auth\SessionGuard::setDispatcher
     * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Auth\SessionGuard::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
     * @see \Illuminate\Auth\SessionGuard::getCookieJar
     * @method static \Illuminate\Contracts\Cookie\QueueingFactory getCookieJar()
     * @see \Illuminate\Auth\SessionGuard::setCookieJar
     * @method static void setCookieJar(\Illuminate\Contracts\Cookie\QueueingFactory $cookie)
     * @see \Illuminate\Auth\SessionGuard::attempting
     * @method static void attempting($callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Auth\GuardHelpers::getProvider
     * @method static \Illuminate\Contracts\Auth\UserProvider getProvider()
     * @see \Illuminate\Auth\SessionGuard::getSession
     * @method static \Illuminate\Contracts\Session\Session getSession()
     * @see \Illuminate\Auth\SessionGuard::getName
     * @method static string getName()
     * @see \Illuminate\Auth\SessionGuard::getLastAttempted
     * @method static \Illuminate\Contracts\Auth\Authenticatable getLastAttempted()
     * @see \Illuminate\Auth\GuardHelpers::forgetUser
     * @method static \Illuminate\Auth\GuardHelpers forgetUser()
     */
    class Auth {}

    /**
     * @see \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives
     * @method static array getCustomDirectives()
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentNamespaces
     * @method static array getClassComponentNamespaces()
     * @see \Illuminate\View\Compilers\Concerns\CompilesConditionals::compileEndOnce
     * @method static string compileEndOnce()
     * @see \Illuminate\View\Compilers\BladeCompiler::componentNamespace
     * @method static void componentNamespace(string $namespace, string $prefix)
     * @see \Illuminate\View\Compilers\BladeCompiler::if
     * @method static void if(string $name, callable $callback)
     * @see \Illuminate\View\Compilers\BladeCompiler::extend
     * @method static void extend(callable $compiler)
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutDoubleEncoding
     * @method static void withoutDoubleEncoding()
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::compileEchos
     * @method static string compileEchos(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::renderComponent
     * @method static string renderComponent(\Illuminate\View\Component $component)
     * @see \Illuminate\View\Compilers\BladeCompiler::components
     * @method static void components(array $components, string $prefix = '')
     * @see \Illuminate\View\Compilers\BladeCompiler::precompiler
     * @method static void precompiler(callable $precompiler)
     * @see \Illuminate\View\Compilers\BladeCompiler::prepareStringsForCompilationUsing
     * @method static \Illuminate\View\Compilers\BladeCompiler prepareStringsForCompilationUsing(callable $callback)
     * @see \Illuminate\View\Compilers\Compiler::getCompiledPath
     * @method static string getCompiledPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentAliases
     * @method static array getClassComponentAliases()
     * @see \Illuminate\View\Compilers\BladeCompiler::include
     * @method static void include(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileClassComponentOpening
     * @method static string compileClassComponentOpening(string $component, string $alias, string $data, string $hash)
     * @see \Illuminate\View\Compilers\BladeCompiler::getAnonymousComponentNamespaces
     * @method static array getAnonymousComponentNamespaces()
     * @see \Illuminate\View\Compilers\BladeCompiler::component
     * @method static void component(string $class, null|string $alias = null, string $prefix = '')
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileEndComponentClass
     * @method static string compileEndComponentClass()
     * @see \Illuminate\View\Compilers\BladeCompiler::getExtensions
     * @method static array getExtensions()
     * @see \Illuminate\View\Compilers\BladeCompiler::withDoubleEncoding
     * @method static void withDoubleEncoding()
     * @see \Illuminate\View\Compilers\BladeCompiler::setEchoFormat
     * @method static void setEchoFormat(string $format)
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasInclude
     * @method static void aliasInclude(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::compile
     * @method static void compile(null|string $path = null)
     * @see \Illuminate\View\Compilers\Compiler::isExpired
     * @method static bool isExpired(string $path)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::stringable
     * @method static void stringable(callable|string $class, callable|null $handler = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::check
     * @method static bool check(string $name, ...$parameters)
     * @see \Illuminate\View\Compilers\BladeCompiler::anonymousComponentPath
     * @method static void anonymousComponentPath(string $path, null|string $prefix = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::applyEchoHandler
     * @method static string applyEchoHandler(string $value)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::sanitizeComponentAttribute
     * @method static \Illuminate\View\ComponentAttributeBag|mixed sanitizeComponentAttribute($value)
     * @see \Illuminate\View\Compilers\BladeCompiler::getAnonymousComponentPaths
     * @method static array getAnonymousComponentPaths()
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutComponentTags
     * @method static void withoutComponentTags()
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasComponent
     * @method static void aliasComponent(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::setPath
     * @method static void setPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::render
     * @method static string render(string $string, array $data = [], bool $deleteCachedView = false)
     * @see \Illuminate\View\Compilers\BladeCompiler::stripParentheses
     * @method static string stripParentheses(string $expression)
     * @see \Illuminate\View\Compilers\BladeCompiler::getPath
     * @method static string getPath()
     * @see \Illuminate\View\Compilers\BladeCompiler::compileString
     * @method static string compileString(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::directive
     * @method static void directive(string $name, callable $handler)
     * @see \Illuminate\View\Compilers\BladeCompiler::anonymousComponentNamespace
     * @method static void anonymousComponentNamespace(string $directory, null|string $prefix = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::newComponentHash
     * @method static string newComponentHash(string $component)
     */
    class Blade {}

    /**
     * @see \Illuminate\Contracts\Broadcasting\Broadcaster::broadcast
     * @method static void broadcast(array $channels, string $event, array $payload = [])
     * @see \Illuminate\Broadcasting\BroadcastManager::pusher
     * @method static \Pusher\Pusher pusher(array $config)
     * @see \Illuminate\Broadcasting\BroadcastManager::private
     * @method static \Illuminate\Broadcasting\AnonymousEvent private(string $channel)
     * @see \Illuminate\Broadcasting\BroadcastManager::ably
     * @method static \Ably\AblyRest ably(array $config)
     * @see \Illuminate\Broadcasting\BroadcastManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Broadcasting\BroadcastManager::channelRoutes
     * @method static void channelRoutes(array|null $attributes = null)
     * @see \Illuminate\Contracts\Broadcasting\Broadcaster::auth
     * @method static mixed auth(\Illuminate\Http\Request $request)
     * @see \Illuminate\Broadcasting\BroadcastManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::routes
     * @method static void routes(array|null $attributes = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::userRoutes
     * @method static void userRoutes(array|null $attributes = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::setApplication
     * @method static \Illuminate\Broadcasting\BroadcastManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Broadcasting\BroadcastManager::connection
     * @method static \Illuminate\Contracts\Broadcasting\Broadcaster|mixed connection(null|string $driver = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::presence
     * @method static \Illuminate\Broadcasting\AnonymousEvent presence(string $channel)
     * @see \Illuminate\Broadcasting\BroadcastManager::event
     * @method static \Illuminate\Broadcasting\PendingBroadcast event(mixed|null $event = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::on
     * @method static \Illuminate\Broadcasting\AnonymousEvent on(array|\Illuminate\Broadcasting\Channel|string $channels)
     * @see \Illuminate\Broadcasting\BroadcastManager::forgetDrivers
     * @method static \Illuminate\Broadcasting\BroadcastManager forgetDrivers()
     * @see \Illuminate\Broadcasting\BroadcastManager::getApplication
     * @method static \Illuminate\Contracts\Container\Container|\Illuminate\Contracts\Foundation\Application getApplication()
     * @see \Illuminate\Broadcasting\BroadcastManager::extend
     * @method static \Illuminate\Broadcasting\BroadcastManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Broadcasting\BroadcastManager::driver
     * @method static \Illuminate\Contracts\Broadcasting\Broadcaster|mixed driver(null|string $name = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::socket
     * @method static null|string socket(\Illuminate\Http\Request|null $request = null)
     * @see \Illuminate\Broadcasting\BroadcastManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Broadcasting\BroadcastManager::queue
     * @method static void queue($event)
     * @see \Illuminate\Contracts\Broadcasting\Broadcaster::validAuthenticationResponse
     * @method static mixed validAuthenticationResponse(\Illuminate\Http\Request $request, $result)
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster::getChannels
     * @method static \Illuminate\Support\Collection getChannels()
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster::resolveAuthenticatedUser
     * @method static array|null resolveAuthenticatedUser(\Illuminate\Http\Request $request)
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster::channel
     * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster channel(\Illuminate\Contracts\Broadcasting\HasBroadcastChannel|string $channel, callable|string $callback, array $options = [])
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster::resolveAuthenticatedUserUsing
     * @method static void resolveAuthenticatedUserUsing(\Closure $callback)
     */
    class Broadcast {}

    /**
     * @see \Illuminate\Bus\Dispatcher::chain
     * @method static \Illuminate\Foundation\Bus\PendingChain chain(array|\Illuminate\Support\Collection $jobs)
     * @see \Illuminate\Bus\Dispatcher::dispatch
     * @method static mixed dispatch($command)
     * @see \Illuminate\Bus\Dispatcher::findBatch
     * @method static \Illuminate\Bus\Batch|null findBatch(string $batchId)
     * @see \Illuminate\Bus\Dispatcher::batch
     * @method static \Illuminate\Bus\PendingBatch batch(array|\Illuminate\Support\Collection|mixed $jobs)
     * @see \Illuminate\Bus\Dispatcher::pipeThrough
     * @method static \Illuminate\Bus\Dispatcher pipeThrough(array $pipes)
     * @see \Illuminate\Bus\Dispatcher::getCommandHandler
     * @method static bool|mixed getCommandHandler($command)
     * @see \Illuminate\Bus\Dispatcher::dispatchSync
     * @method static mixed dispatchSync($command, $handler = null)
     * @see \Illuminate\Bus\Dispatcher::dispatchToQueue
     * @method static mixed dispatchToQueue($command)
     * @see \Illuminate\Bus\Dispatcher::dispatchNow
     * @method static mixed dispatchNow($command, $handler = null)
     * @see \Illuminate\Bus\Dispatcher::hasCommandHandler
     * @method static bool hasCommandHandler($command)
     * @see \Illuminate\Bus\Dispatcher::dispatchAfterResponse
     * @method static void dispatchAfterResponse($command, $handler = null)
     * @see \Illuminate\Bus\Dispatcher::map
     * @method static \Illuminate\Bus\Dispatcher map(array $map)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::recordPendingBatch
     * @method static \Illuminate\Bus\Batch recordPendingBatch(\Illuminate\Bus\PendingBatch $pendingBatch)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::dispatchedSync
     * @method static \Illuminate\Support\Collection dispatchedSync(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedSyncTimes
     * @method static void assertDispatchedSyncTimes(string $command, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatchedSync
     * @method static void assertNotDispatchedSync(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertNothingBatched
     * @method static void assertNothingBatched()
     * @see \Illuminate\Support\Testing\Fakes\BusFake::dispatched
     * @method static \Illuminate\Support\Collection dispatched(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertChained
     * @method static void assertChained(array $expectedChain)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::hasDispatched
     * @method static bool hasDispatched(string $command)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::serializeAndRestore
     * @method static \Illuminate\Support\Testing\Fakes\BusFake serializeAndRestore(bool $serializeAndRestore = true)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertBatched
     * @method static void assertBatched(callable $callback)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatchedAfterResponse
     * @method static void assertNotDispatchedAfterResponse(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::except
     * @method static \Illuminate\Support\Testing\Fakes\BusFake except(array|string $jobsToDispatch)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::dispatchFakeBatch
     * @method static \Illuminate\Bus\Batch dispatchFakeBatch(string $name = '')
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatched
     * @method static void assertDispatched(string $command, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedWithoutChain
     * @method static void assertDispatchedWithoutChain(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::dispatchedBatches
     * @method static array dispatchedBatches()
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedAfterResponse
     * @method static void assertDispatchedAfterResponse(string $command, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::chainedBatch
     * @method static \Illuminate\Support\Testing\Fakes\ChainedBatchTruthTest chainedBatch(\Closure $callback)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::hasDispatchedSync
     * @method static bool hasDispatchedSync(string $command)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::hasDispatchedAfterResponse
     * @method static bool hasDispatchedAfterResponse(string $command)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertNothingDispatched
     * @method static void assertNothingDispatched()
     * @see \Illuminate\Support\Testing\Fakes\BusFake::batched
     * @method static \Illuminate\Support\Collection batched(callable $callback)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::dispatchedAfterResponse
     * @method static \Illuminate\Support\Collection dispatchedAfterResponse(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedAfterResponseTimes
     * @method static void assertDispatchedAfterResponseTimes(string $command, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedTimes
     * @method static void assertDispatchedTimes(string $command, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatched
     * @method static void assertNotDispatched(string $command, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedSync
     * @method static void assertDispatchedSync(string $command, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\BusFake::assertBatchCount
     * @method static void assertBatchCount(int $count)
     */
    class Bus {}

    /**
     * @see \Illuminate\Cache\CacheManager::resolve
     * @method static \Illuminate\Contracts\Cache\Repository resolve(string $name)
     * @see \Illuminate\Cache\CacheManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Cache\CacheManager::refreshEventDispatcher
     * @method static void refreshEventDispatcher()
     * @see \Illuminate\Cache\CacheManager::repository
     * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store, array $config = [])
     * @see \Illuminate\Contracts\Cache\LockProvider::restoreLock
     * @method static \Illuminate\Contracts\Cache\Lock restoreLock(string $name, string $owner)
     * @see \Illuminate\Cache\Repository::put
     * @method static bool put(array|string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Cache\Repository::supportsTags
     * @method static bool supportsTags()
     * @see \Illuminate\Cache\Repository::putMany
     * @method static bool putMany(array $values, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Contracts\Cache\LockProvider::lock
     * @method static \Illuminate\Contracts\Cache\Lock lock(string $name, int $seconds = 0, null|string $owner = null)
     * @see \Illuminate\Cache\Repository::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Cache\Repository::getMultiple
     * @method static iterable getMultiple($keys, $default = null)
     * @see \Illuminate\Cache\Repository::add
     * @method static bool add(string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Cache\Repository::getStore
     * @method static \Illuminate\Contracts\Cache\Store getStore()
     * @see \Illuminate\Cache\CacheManager::forgetDriver
     * @method static \Illuminate\Cache\CacheManager forgetDriver(array|null|string $name = null)
     * @see \Illuminate\Cache\Repository::getDefaultCacheTime
     * @method static int|null getDefaultCacheTime()
     * @see \Illuminate\Cache\Repository::tags
     * @method static \Illuminate\Cache\TaggedCache tags(array|mixed $names)
     * @see \Illuminate\Cache\CacheManager::extend
     * @method static \Illuminate\Cache\CacheManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cache\Repository::forget
     * @method static bool forget(string $key)
     * @see \Illuminate\Cache\Repository::setDefaultCacheTime
     * @method static \Illuminate\Cache\Repository setDefaultCacheTime(int|null $seconds)
     * @see \Illuminate\Cache\CacheManager::driver
     * @method static \Illuminate\Contracts\Cache\Repository driver(null|string $driver = null)
     * @see \Illuminate\Cache\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Cache\Repository::sear
     * @method static mixed sear(string $key, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Cache\CacheManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Cache\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Cache\Repository::setMultiple
     * @method static bool setMultiple($values, $ttl = null)
     * @see \Illuminate\Cache\Repository::setStore
     * @method static \Illuminate\Cache\Repository setStore(\Illuminate\Contracts\Cache\Store $store)
     * @see \Illuminate\Cache\Repository::increment
     * @method static bool|int increment(string $key, $value = 1)
     * @see \Illuminate\Cache\CacheManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Cache\Repository::delete
     * @method static bool delete($key)
     * @see \Illuminate\Cache\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Cache\Repository::rememberForever
     * @method static mixed rememberForever(string $key, \Closure $callback)
     * @see \Illuminate\Cache\Repository::remember
     * @method static mixed remember(string $key, \DateInterval|\DateTimeInterface|int|null $ttl, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Contracts\Cache\Store::flush
     * @method static bool flush()
     * @see \Illuminate\Cache\Repository::get
     * @method static mixed get(array|string $key, $default = null)
     * @see \Illuminate\Cache\Repository::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getEventDispatcher()
     * @see \Illuminate\Cache\CacheManager::setApplication
     * @method static \Illuminate\Cache\CacheManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Cache\Repository::missing
     * @method static bool missing(string $key)
     * @see \Illuminate\Cache\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cache\Repository::set
     * @method static bool set($key, $value, $ttl = null)
     * @see \Illuminate\Cache\Repository::clear
     * @method static bool clear()
     * @see \Illuminate\Cache\CacheManager::store
     * @method static \Illuminate\Contracts\Cache\Repository store(null|string $name = null)
     * @see \Illuminate\Cache\Repository::many
     * @method static array many(array $keys)
     * @see \Illuminate\Cache\Repository::pull
     * @method static \Illuminate\Support\HigherOrderTapProxy|mixed pull(array|string $key, $default = null)
     * @see \Illuminate\Cache\Repository::decrement
     * @method static bool|int decrement(string $key, $value = 1)
     * @see \Illuminate\Cache\Repository::deleteMultiple
     * @method static bool deleteMultiple($keys)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Cache\Repository::forever
     * @method static bool forever(string $key, $value)
     * @see \Illuminate\Contracts\Cache\Store::getPrefix
     * @method static string getPrefix()
     * @see \Illuminate\Cache\Repository::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     */
    class Cache {}

    /**
     * @see \Illuminate\Config\Repository::all
     * @method static array all()
     * @see \Illuminate\Config\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Config\Repository::set
     * @method static void set(array|string $key, $value = null)
     * @see \Illuminate\Config\Repository::string
     * @method static string string(string $key, $default = null)
     * @see \Illuminate\Config\Repository::getMany
     * @method static array getMany(array $keys)
     * @see \Illuminate\Config\Repository::prepend
     * @method static void prepend(string $key, $value)
     * @see \Illuminate\Config\Repository::integer
     * @method static int integer(string $key, $default = null)
     * @see \Illuminate\Config\Repository::float
     * @method static float float(string $key, $default = null)
     * @see \Illuminate\Config\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Config\Repository::push
     * @method static void push(string $key, $value)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Config\Repository::boolean
     * @method static bool boolean(string $key, $default = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Config\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Config\Repository::array
     * @method static array array(string $key, $default = null)
     * @see \Illuminate\Config\Repository::get
     * @method static array|mixed get(array|string $key, $default = null)
     * @see \Illuminate\Config\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Config\Repository::has
     * @method static bool has(string $key)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Config {}

    /**
     * @see \Illuminate\Log\Context\Repository::pushHidden
     * @method static \Illuminate\Log\Context\Repository pushHidden(string $key, ...$values)
     * @see \Illuminate\Log\Context\Repository::addHidden
     * @method static \Illuminate\Log\Context\Repository addHidden(array|string $key, $value = null)
     * @see \Illuminate\Log\Context\Repository::hiddenStackContains
     * @method static bool hiddenStackContains(string $key, $value, bool $strict = false)
     * @see \Illuminate\Log\Context\Repository::isEmpty
     * @method static bool isEmpty()
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\Context\Repository::handleUnserializeExceptionsUsing
     * @method static \Illuminate\Log\Context\Repository handleUnserializeExceptionsUsing(callable|null $callback)
     * @see \Illuminate\Log\Context\Repository::forgetHidden
     * @method static \Illuminate\Log\Context\Repository forgetHidden(string|string[] $key)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Log\Context\Repository::flush
     * @method static \Illuminate\Log\Context\Repository flush()
     * @see \Illuminate\Log\Context\Repository::hydrated
     * @method static \Illuminate\Log\Context\Repository hydrated(callable $callback)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\Context\Repository::stackContains
     * @method static bool stackContains(string $key, $value, bool $strict = false)
     * @see \Illuminate\Log\Context\Repository::get
     * @method static mixed get(string $key, $default = null)
     * @see \Illuminate\Queue\SerializesAndRestoresModelIdentifiers::restoreModel
     * @method static \Illuminate\Database\Eloquent\Model restoreModel(\Illuminate\Contracts\Database\ModelIdentifier $value)
     * @see \Illuminate\Log\Context\Repository::only
     * @method static array only(string[] $keys)
     * @see \Illuminate\Log\Context\Repository::pullHidden
     * @method static mixed pullHidden(string $key, $default = null)
     * @see \Illuminate\Log\Context\Repository::has
     * @method static bool has(string $key)
     * @see \Illuminate\Log\Context\Repository::all
     * @method static array all()
     * @see \Illuminate\Log\Context\Repository::add
     * @method static \Illuminate\Log\Context\Repository add(array|string $key, $value = null)
     * @see \Illuminate\Log\Context\Repository::getHidden
     * @method static mixed getHidden(string $key, $default = null)
     * @see \Illuminate\Log\Context\Repository::dehydrating
     * @method static \Illuminate\Log\Context\Repository dehydrating(callable $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Log\Context\Repository::onlyHidden
     * @method static array onlyHidden(string[] $keys)
     * @see \Illuminate\Log\Context\Repository::hydrate
     * @method static \Illuminate\Log\Context\Repository hydrate(array|null $context)
     * @see \Illuminate\Log\Context\Repository::push
     * @method static \Illuminate\Log\Context\Repository push(string $key, ...$values)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Log\Context\Repository::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Log\Context\Repository::forget
     * @method static \Illuminate\Log\Context\Repository forget(string|string[] $key)
     * @see \Illuminate\Log\Context\Repository::allHidden
     * @method static array allHidden()
     * @see \Illuminate\Log\Context\Repository::dehydrate
     * @method static array|null dehydrate()
     * @see \Illuminate\Log\Context\Repository::addHiddenIf
     * @method static \Illuminate\Log\Context\Repository addHiddenIf(string $key, $value)
     * @see \Illuminate\Log\Context\Repository::addIf
     * @method static \Illuminate\Log\Context\Repository addIf(string $key, $value)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Log\Context\Repository::hasHidden
     * @method static bool hasHidden(string $key)
     */
    class Context {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cookie\CookieJar::unqueue
     * @method static void unqueue(string $name, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::queued
     * @method static null|\Symfony\Component\HttpFoundation\Cookie queued(string $key, $default = null, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::getQueuedCookies
     * @method static \Symfony\Component\HttpFoundation\Cookie[] getQueuedCookies()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cookie\CookieJar::forget
     * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::hasQueued
     * @method static bool hasQueued(string $key, null|string $path = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Cookie\CookieJar::expire
     * @method static void expire(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain
     * @method static \Illuminate\Cookie\CookieJar setDefaultPathAndDomain(string $path, null|string $domain, bool|null $secure = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::forever
     * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::make
     * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes = 0, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Cookie\CookieJar::queue
     * @method static void queue(...$parameters)
     * @see \Illuminate\Cookie\CookieJar::flushQueuedCookies
     * @method static \Illuminate\Cookie\CookieJar flushQueuedCookies()
     */
    class Cookie {}

    /**
     * @see \Illuminate\Encryption\Encrypter::getKey
     * @method static string getKey()
     * @see \Illuminate\Encryption\Encrypter::encryptString
     * @method static string encryptString(string $value)
     * @see \Illuminate\Encryption\Encrypter::generateKey
     * @method static string generateKey(string $cipher)
     * @see \Illuminate\Encryption\Encrypter::decryptString
     * @method static false|string decryptString(string $payload)
     * @see \Illuminate\Encryption\Encrypter::encrypt
     * @method static string encrypt($value, bool $serialize = true)
     * @see \Illuminate\Encryption\Encrypter::getPreviousKeys
     * @method static array getPreviousKeys()
     * @see \Illuminate\Encryption\Encrypter::previousKeys
     * @method static \Illuminate\Encryption\Encrypter previousKeys(array $keys)
     * @see \Illuminate\Encryption\Encrypter::decrypt
     * @method static false|mixed decrypt(string $payload, bool $unserialize = true)
     * @see \Illuminate\Encryption\Encrypter::supported
     * @method static bool supported(string $key, string $cipher)
     * @see \Illuminate\Encryption\Encrypter::getAllKeys
     * @method static array getAllKeys()
     */
    class Crypt {}

    /**
     * @see \Illuminate\Database\Connection::getServerVersion
     * @method static string getServerVersion()
     * @see \Illuminate\Database\Connection::logQuery
     * @method static void logQuery(string $query, array $bindings, float|null $time = null)
     * @see \Illuminate\Database\DatabaseManager::disconnect
     * @method static void disconnect(null|string $name = null)
     * @see \Illuminate\Database\Connection::select
     * @method static array select(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::getDatabaseName
     * @method static string getDatabaseName()
     * @see \Illuminate\Database\Connection::prepareBindings
     * @method static array prepareBindings(array $bindings)
     * @see \Illuminate\Database\DatabaseManager::getConnections
     * @method static \Illuminate\Database\Connection[] getConnections()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::commit
     * @method static void commit()
     * @see \Illuminate\Database\Connection::recordsHaveBeenModified
     * @method static void recordsHaveBeenModified(bool $value = true)
     * @see \Illuminate\Database\Connection::threadCount
     * @method static int|null threadCount()
     * @see \Illuminate\Database\Connection::getSchemaGrammar
     * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar()
     * @see \Illuminate\Database\Connection::pretend
     * @method static array pretend(\Closure $callback)
     * @see \Illuminate\Database\Connection::useDefaultSchemaGrammar
     * @method static void useDefaultSchemaGrammar()
     * @see \Illuminate\Database\DatabaseManager::connection
     * @method static \Illuminate\Database\Connection connection(null|string $name = null)
     * @see \Illuminate\Database\Connection::allowQueryDurationHandlersToRunAgain
     * @method static void allowQueryDurationHandlersToRunAgain()
     * @see \Illuminate\Database\DatabaseManager::setDefaultConnection
     * @method static void setDefaultConnection(string $name)
     * @see \Illuminate\Database\Connection::raw
     * @method static \Illuminate\Contracts\Database\Query\Expression|\Illuminate\Database\Query\Expression raw($value)
     * @see \Illuminate\Database\Connection::withoutPretending
     * @method static mixed withoutPretending(\Closure $callback)
     * @see \Illuminate\Database\Connection::beforeStartingTransaction
     * @method static \Illuminate\Database\Connection beforeStartingTransaction(\Closure $callback)
     * @see \Illuminate\Database\Connection::getSchemaBuilder
     * @method static \Illuminate\Database\Schema\Builder getSchemaBuilder()
     * @see \Illuminate\Database\DatabaseManager::extend
     * @method static void extend(string $name, callable $resolver)
     * @see \Illuminate\Database\Connection::scalar
     * @method static mixed|null scalar(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::setReadWriteType
     * @method static \Illuminate\Database\Connection setReadWriteType(null|string $readWriteType)
     * @see \Illuminate\Database\Connection::logging
     * @method static bool logging()
     * @see \Illuminate\Database\Connection::selectResultSets
     * @method static array selectResultSets(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\DatabaseManager::getDefaultConnection
     * @method static string getDefaultConnection()
     * @see \Illuminate\Database\Connection::affectingStatement
     * @method static int affectingStatement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::selectOne
     * @method static mixed selectOne(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\DatabaseManager::reconnect
     * @method static \Illuminate\Database\Connection reconnect(null|string $name = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Database\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Database\Connection::setPdo
     * @method static \Illuminate\Database\Connection setPdo(null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::bindValues
     * @method static void bindValues(\PDOStatement $statement, array $bindings)
     * @see \Illuminate\Database\Connection::escape
     * @method static string escape(bool|float|int|null|string $value, bool $binary = false)
     * @see \Illuminate\Database\Connection::table
     * @method static \Illuminate\Database\Query\Builder table(\Illuminate\Contracts\Database\Query\Expression|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Connection::getDriverTitle
     * @method static string getDriverTitle()
     * @see \Illuminate\Database\Connection::getRawPdo
     * @method static \Closure|null|\PDO getRawPdo()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::rollBack
     * @method static void rollBack(int|null $toLevel = null)
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transactionLevel
     * @method static int transactionLevel()
     * @see \Illuminate\Database\Connection::setPostProcessor
     * @method static \Illuminate\Database\Connection setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor)
     * @see \Illuminate\Database\Connection::forgetRecordModificationState
     * @method static void forgetRecordModificationState()
     * @see \Illuminate\Database\Connection::unprepared
     * @method static bool unprepared(string $query)
     * @see \Illuminate\Database\DatabaseManager::supportedDrivers
     * @method static string[] supportedDrivers()
     * @see \Illuminate\Database\Connection::setReadPdo
     * @method static \Illuminate\Database\Connection setReadPdo(null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::flushQueryLog
     * @method static void flushQueryLog()
     * @see \Illuminate\Database\Connection::getPdo
     * @method static \PDO getPdo()
     * @see \Illuminate\Database\Connection::getDriverName
     * @method static string getDriverName()
     * @see \Illuminate\Database\Connection::resolverFor
     * @method static void resolverFor(string $driver, \Closure $callback)
     * @see \Illuminate\Database\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Database\Connection::getRawReadPdo
     * @method static \Closure|null|\PDO getRawReadPdo()
     * @see \Illuminate\Database\DatabaseManager::availableDrivers
     * @method static string[] availableDrivers()
     * @see \Illuminate\Database\Connection::getReadPdo
     * @method static \PDO getReadPdo()
     * @see \Illuminate\Database\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transaction
     * @method static mixed transaction(\Closure $callback, int $attempts = 1)
     * @see \Illuminate\Database\Connection::getPostProcessor
     * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor()
     * @see \Illuminate\Database\Connection::selectFromWriteConnection
     * @method static array selectFromWriteConnection(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::useDefaultPostProcessor
     * @method static void useDefaultPostProcessor()
     * @see \Illuminate\Database\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Database\DatabaseManager::connectUsing
     * @method static \Illuminate\Database\ConnectionInterface connectUsing(string $name, array $config, bool $force = false)
     * @see \Illuminate\Database\Connection::getQueryGrammar
     * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar()
     * @see \Illuminate\Database\DatabaseManager::forgetExtension
     * @method static void forgetExtension(string $name)
     * @see \Illuminate\Database\Connection::resetTotalQueryDuration
     * @method static void resetTotalQueryDuration()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::afterCommit
     * @method static void afterCommit(callable $callback)
     * @see \Illuminate\Database\Connection::whenQueryingForLongerThan
     * @method static void whenQueryingForLongerThan(\Carbon\CarbonInterval|\DateTimeInterface|float|int $threshold, callable $handler)
     * @see \Illuminate\Database\Connection::getQueryLog
     * @method static array getQueryLog()
     * @see \Illuminate\Database\DatabaseManager::usingConnection
     * @method static mixed usingConnection(string $name, callable $callback)
     * @see \Illuminate\Database\Connection::query
     * @method static \Illuminate\Database\Query\Builder query()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Connection::disableQueryLog
     * @method static void disableQueryLog()
     * @see \Illuminate\Database\Connection::setQueryGrammar
     * @method static \Illuminate\Database\Connection setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::getTablePrefix
     * @method static string getTablePrefix()
     * @see \Illuminate\Database\Connection::totalQueryDuration
     * @method static float totalQueryDuration()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Database\Connection::getNameWithReadWriteType
     * @method static null|string getNameWithReadWriteType()
     * @see \Illuminate\Database\Connection::cursor
     * @method static \Generator cursor(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::useDefaultQueryGrammar
     * @method static void useDefaultQueryGrammar()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::beginTransaction
     * @method static void beginTransaction()
     * @see \Illuminate\Database\Connection::pretending
     * @method static bool pretending()
     * @see \Illuminate\Database\DatabaseManager::setReconnector
     * @method static void setReconnector(callable $reconnector)
     * @see \Illuminate\Database\Connection::insert
     * @method static bool insert(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setDatabaseName
     * @method static \Illuminate\Database\Connection setDatabaseName(string $database)
     * @see \Illuminate\Database\Connection::update
     * @method static int update(string $query, array $bindings = [])
     * @see \Illuminate\Database\DatabaseManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Database\Connection::withTablePrefix
     * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar)
     * @see \Illuminate\Database\Connection::setEventDispatcher
     * @method static \Illuminate\Database\Connection setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Database\Connection::delete
     * @method static int delete(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setRecordModificationState
     * @method static \Illuminate\Database\Connection setRecordModificationState(bool $value)
     * @see \Illuminate\Database\Connection::getRawQueryLog
     * @method static array getRawQueryLog()
     * @see \Illuminate\Database\Connection::beforeExecuting
     * @method static \Illuminate\Database\Connection beforeExecuting(\Closure $callback)
     * @see \Illuminate\Database\DatabaseManager::setApplication
     * @method static \Illuminate\Database\DatabaseManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Database\Connection::statement
     * @method static bool statement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::unsetTransactionManager
     * @method static void unsetTransactionManager()
     * @see \Illuminate\Database\Connection::setTablePrefix
     * @method static \Illuminate\Database\Connection setTablePrefix(string $prefix)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Connection::enableQueryLog
     * @method static void enableQueryLog()
     * @see \Illuminate\Database\Connection::getConfig
     * @method static mixed getConfig(null|string $option = null)
     * @see \Illuminate\Database\Connection::reconnectIfMissingConnection
     * @method static void reconnectIfMissingConnection()
     * @see \Illuminate\Database\Connection::setTransactionManager
     * @method static \Illuminate\Database\Connection setTransactionManager(\Illuminate\Database\DatabaseTransactionsManager $manager)
     * @see \Illuminate\Database\Connection::setSchemaGrammar
     * @method static \Illuminate\Database\Connection setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::useWriteConnectionWhenReading
     * @method static \Illuminate\Database\Connection useWriteConnectionWhenReading(bool $value = true)
     * @see \Illuminate\Database\Connection::getResolver
     * @method static mixed|null getResolver(string $driver)
     * @see \Illuminate\Database\Connection::hasModifiedRecords
     * @method static bool hasModifiedRecords()
     */
    class DB {}

    /**
     * @see \Illuminate\Support\DateFactory::useCallable
     * @method static void useCallable(callable $callable)
     * @see \Illuminate\Support\DateFactory::isModifiableUnit
     * @method static bool isModifiableUnit($unit)
     * @see \Illuminate\Support\DateFactory::maxValue
     * @method static \Illuminate\Support\Carbon maxValue()
     * @see \Illuminate\Support\DateFactory::instance
     * @method static \Illuminate\Support\Carbon instance($date)
     * @see \Illuminate\Support\DateFactory::useClass
     * @method static void useClass(string $dateClass)
     * @see \Illuminate\Support\DateFactory::localeHasDiffOneDayWords
     * @method static bool localeHasDiffOneDayWords($locale)
     * @see \Illuminate\Support\DateFactory::createMidnightDate
     * @method static \Illuminate\Support\Carbon createMidnightDate($year = null, $month = null, $day = null, $tz = null)
     * @see \Illuminate\Support\DateFactory::use
     * @method static mixed use($handler)
     * @see \Illuminate\Support\DateFactory::getWeekStartsAt
     * @method static int getWeekStartsAt()
     * @see \Illuminate\Support\DateFactory::hasTestNow
     * @method static bool hasTestNow()
     * @see \Illuminate\Support\DateFactory::localeHasShortUnits
     * @method static bool localeHasShortUnits($locale)
     * @see \Illuminate\Support\DateFactory::resetMonthsOverflow
     * @method static void resetMonthsOverflow()
     * @see \Illuminate\Support\DateFactory::setUtf8
     * @method static void setUtf8($utf8)
     * @see \Illuminate\Support\DateFactory::setTranslator
     * @method static void setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator)
     * @see \Illuminate\Support\DateFactory::useStrictMode
     * @method static void useStrictMode($strictModeEnabled = true)
     * @see \Illuminate\Support\DateFactory::localeHasDiffSyntax
     * @method static bool localeHasDiffSyntax($locale)
     * @see \Illuminate\Support\DateFactory::disableHumanDiffOption
     * @method static void disableHumanDiffOption($humanDiffOption)
     * @see \Illuminate\Support\DateFactory::pluralUnit
     * @method static string pluralUnit(string $unit)
     * @see \Illuminate\Support\DateFactory::create
     * @method static \Illuminate\Support\Carbon create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null)
     * @see \Illuminate\Support\DateFactory::enableHumanDiffOption
     * @method static void enableHumanDiffOption($humanDiffOption)
     * @see \Illuminate\Support\DateFactory::getAvailableLocales
     * @method static array getAvailableLocales()
     * @see \Illuminate\Support\DateFactory::createFromTimestampUTC
     * @method static \Illuminate\Support\Carbon createFromTimestampUTC($timestamp)
     * @see \Illuminate\Support\DateFactory::getDays
     * @method static array getDays()
     * @see \Illuminate\Support\DateFactory::createSafe
     * @method static false|\Illuminate\Support\Carbon createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
     * @see \Illuminate\Support\DateFactory::singularUnit
     * @method static string singularUnit(string $unit)
     * @see \Illuminate\Support\DateFactory::getWeekendDays
     * @method static array getWeekendDays()
     * @see \Illuminate\Support\DateFactory::getTestNow
     * @method static \Illuminate\Support\Carbon|null getTestNow()
     * @see \Illuminate\Support\DateFactory::serializeUsing
     * @method static void serializeUsing($callback)
     * @see \Illuminate\Support\DateFactory::useMonthsOverflow
     * @method static void useMonthsOverflow($monthsOverflow = true)
     * @see \Illuminate\Support\DateFactory::setToStringFormat
     * @method static void setToStringFormat($format)
     * @see \Illuminate\Support\DateFactory::tomorrow
     * @method static \Illuminate\Support\Carbon tomorrow($tz = null)
     * @see \Illuminate\Support\DateFactory::createFromTimestamp
     * @method static \Illuminate\Support\Carbon createFromTimestamp($timestamp, $tz = null)
     * @see \Illuminate\Support\DateFactory::resetToStringFormat
     * @method static void resetToStringFormat()
     * @see \Illuminate\Support\DateFactory::resetYearsOverflow
     * @method static void resetYearsOverflow()
     * @see \Illuminate\Support\DateFactory::createFromDate
     * @method static \Illuminate\Support\Carbon createFromDate($year = null, $month = null, $day = null, $tz = null)
     * @see \Illuminate\Support\DateFactory::mixin
     * @method static void mixin($mixin)
     * @see \Illuminate\Support\DateFactory::localeHasDiffTwoDayWords
     * @method static bool localeHasDiffTwoDayWords($locale)
     * @see \Illuminate\Support\DateFactory::useFactory
     * @method static void useFactory(object $factory)
     * @see \Illuminate\Support\DateFactory::setMidDayAt
     * @method static void setMidDayAt($hour)
     * @see \Illuminate\Support\DateFactory::shouldOverflowYears
     * @method static bool shouldOverflowYears()
     * @see \Illuminate\Support\DateFactory::getIsoUnits
     * @method static array getIsoUnits()
     * @see \Illuminate\Support\DateFactory::getTranslator
     * @method static \Symfony\Component\Translation\TranslatorInterface getTranslator()
     * @see \Illuminate\Support\DateFactory::setLocale
     * @method static bool setLocale($locale)
     * @see \Illuminate\Support\DateFactory::isMutable
     * @method static bool isMutable()
     * @see \Illuminate\Support\DateFactory::shouldOverflowMonths
     * @method static bool shouldOverflowMonths()
     * @see \Illuminate\Support\DateFactory::hasRelativeKeywords
     * @method static bool hasRelativeKeywords($time)
     * @see \Illuminate\Support\DateFactory::createFromTimeString
     * @method static \Illuminate\Support\Carbon createFromTimeString($time, $tz = null)
     * @see \Illuminate\Support\DateFactory::getWeekEndsAt
     * @method static int getWeekEndsAt()
     * @see \Illuminate\Support\DateFactory::yesterday
     * @method static \Illuminate\Support\Carbon yesterday($tz = null)
     * @see \Illuminate\Support\DateFactory::hasMacro
     * @method static bool hasMacro($name)
     * @see \Illuminate\Support\DateFactory::createFromTimestampMs
     * @method static \Illuminate\Support\Carbon createFromTimestampMs($timestamp, $tz = null)
     * @see \Illuminate\Support\DateFactory::setWeekStartsAt
     * @method static void setWeekStartsAt($day)
     * @see \Illuminate\Support\DateFactory::today
     * @method static \Illuminate\Support\Carbon today($tz = null)
     * @see \Illuminate\Support\DateFactory::now
     * @method static \Illuminate\Support\Carbon now($tz = null)
     * @see \Illuminate\Support\DateFactory::fromSerialized
     * @method static \Illuminate\Support\Carbon fromSerialized($value)
     * @see \Illuminate\Support\DateFactory::useYearsOverflow
     * @method static void useYearsOverflow($yearsOverflow = true)
     * @see \Illuminate\Support\DateFactory::make
     * @method static \Illuminate\Support\Carbon|null make($var)
     * @see \Illuminate\Support\DateFactory::createFromFormat
     * @method static false|\Illuminate\Support\Carbon createFromFormat($format, $time, $tz = null)
     * @see \Illuminate\Support\DateFactory::setWeekEndsAt
     * @method static void setWeekEndsAt($day)
     * @see \Illuminate\Support\DateFactory::setTestNow
     * @method static void setTestNow($testNow = null)
     * @see \Illuminate\Support\DateFactory::macro
     * @method static void macro($name, $macro)
     * @see \Illuminate\Support\DateFactory::useDefault
     * @method static void useDefault()
     * @see \Illuminate\Support\DateFactory::isImmutable
     * @method static bool isImmutable()
     * @see \Illuminate\Support\DateFactory::executeWithLocale
     * @method static mixed executeWithLocale($locale, $func)
     * @see \Illuminate\Support\DateFactory::localeHasPeriodSyntax
     * @method static bool localeHasPeriodSyntax($locale)
     * @see \Illuminate\Support\DateFactory::isStrictModeEnabled
     * @method static bool isStrictModeEnabled()
     * @see \Illuminate\Support\DateFactory::parse
     * @method static \Illuminate\Support\Carbon parse($time = null, $tz = null)
     * @see \Illuminate\Support\DateFactory::setWeekendDays
     * @method static void setWeekendDays($days)
     * @see \Illuminate\Support\DateFactory::minValue
     * @method static \Illuminate\Support\Carbon minValue()
     * @see \Illuminate\Support\DateFactory::createFromTime
     * @method static \Illuminate\Support\Carbon createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)
     * @see \Illuminate\Support\DateFactory::setHumanDiffOptions
     * @method static void setHumanDiffOptions($humanDiffOptions)
     * @see \Illuminate\Support\DateFactory::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Support\DateFactory::hasFormat
     * @method static bool hasFormat($date, $format)
     * @see \Illuminate\Support\DateFactory::getMidDayAt
     * @method static int getMidDayAt()
     * @see \Illuminate\Support\DateFactory::getHumanDiffOptions
     * @method static int getHumanDiffOptions()
     * @see \Illuminate\Support\DateFactory::getLastErrors
     * @method static array getLastErrors()
     */
    class Date {}

    /**
     * @see \Illuminate\Events\Dispatcher::dispatch
     * @method static array|null dispatch(object|string $event, $payload = [], bool $halt = false)
     * @see \Illuminate\Events\Dispatcher::getRawListeners
     * @method static array getRawListeners()
     * @see \Illuminate\Events\Dispatcher::hasListeners
     * @method static bool hasListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::listen
     * @method static void listen(array|\Illuminate\Events\QueuedClosure|string $events, array|\Illuminate\Events\QueuedClosure|null|string $listener = null)
     * @see \Illuminate\Events\Dispatcher::setTransactionManagerResolver
     * @method static \Illuminate\Events\Dispatcher setTransactionManagerResolver(callable $resolver)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Events\Dispatcher::flush
     * @method static void flush(string $event)
     * @see \Illuminate\Events\Dispatcher::makeListener
     * @method static \Closure makeListener(array|string $listener, bool $wildcard = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Events\Dispatcher::setQueueResolver
     * @method static \Illuminate\Events\Dispatcher setQueueResolver(callable $resolver)
     * @see \Illuminate\Events\Dispatcher::subscribe
     * @method static void subscribe(object|string $subscriber)
     * @see \Illuminate\Events\Dispatcher::push
     * @method static void push(string $event, array|object $payload = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Events\Dispatcher::forget
     * @method static void forget(string $event)
     * @see \Illuminate\Events\Dispatcher::hasWildcardListeners
     * @method static bool hasWildcardListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::until
     * @method static array|mixed|null until(object|string $event, $payload = [])
     * @see \Illuminate\Events\Dispatcher::forgetPushed
     * @method static void forgetPushed()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Events\Dispatcher::createClassListener
     * @method static \Closure createClassListener(string $listener, bool $wildcard = false)
     * @see \Illuminate\Events\Dispatcher::getListeners
     * @method static array getListeners(string $eventName)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::assertDispatched
     * @method static void assertDispatched(string $event, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::assertListening
     * @method static void assertListening(string $expectedEvent, array|string $expectedListener)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::assertNothingDispatched
     * @method static void assertNothingDispatched()
     * @see \Illuminate\Support\Testing\Fakes\EventFake::dispatched
     * @method static \Illuminate\Support\Collection dispatched(string $event, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::assertDispatchedTimes
     * @method static void assertDispatchedTimes(string $event, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::dispatchedEvents
     * @method static array dispatchedEvents()
     * @see \Illuminate\Support\Testing\Fakes\EventFake::assertNotDispatched
     * @method static void assertNotDispatched(string $event, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::hasDispatched
     * @method static bool hasDispatched(string $event)
     * @see \Illuminate\Support\Testing\Fakes\EventFake::except
     * @method static \Illuminate\Support\Testing\Fakes\EventFake except(array|string $eventsToDispatch)
     */
    class Event {}

    /**
     * @see \Illuminate\Foundation\Exceptions\Handler::respondUsing
     * @method static \Illuminate\Foundation\Exceptions\Handler respondUsing(callable $callback)
     * @see \Illuminate\Foundation\Exceptions\Handler::buildContextUsing
     * @method static \Illuminate\Foundation\Exceptions\Handler buildContextUsing(\Closure $contextCallback)
     * @see \Illuminate\Foundation\Exceptions\Handler::level
     * @method static \Illuminate\Foundation\Exceptions\Handler level($type, $level)
     * @see \Illuminate\Foundation\Exceptions\Handler::shouldReport
     * @method static bool shouldReport(\Throwable $e)
     * @see \Illuminate\Foundation\Exceptions\Handler::reportable
     * @method static \Illuminate\Foundation\Exceptions\ReportableHandler reportable(callable $reportUsing)
     * @see \Illuminate\Foundation\Exceptions\Handler::stopIgnoring
     * @method static \Illuminate\Foundation\Exceptions\Handler stopIgnoring(array|string $exceptions)
     * @see \Illuminate\Foundation\Exceptions\Handler::dontReport
     * @method static \Illuminate\Foundation\Exceptions\Handler dontReport(array|string $exceptions)
     * @see \Illuminate\Foundation\Exceptions\Handler::renderable
     * @method static \Illuminate\Foundation\Exceptions\Handler renderable(callable $renderUsing)
     * @see \Illuminate\Foundation\Exceptions\Handler::dontReportDuplicates
     * @method static \Illuminate\Foundation\Exceptions\Handler dontReportDuplicates()
     * @see \Illuminate\Foundation\Exceptions\Handler::shouldRenderJsonWhen
     * @method static \Illuminate\Foundation\Exceptions\Handler shouldRenderJsonWhen($callback)
     * @see \Illuminate\Foundation\Exceptions\Handler::ignore
     * @method static \Illuminate\Foundation\Exceptions\Handler ignore(array|string $exceptions)
     * @see \Illuminate\Foundation\Exceptions\Handler::render
     * @method static \Symfony\Component\HttpFoundation\Response render(\Illuminate\Http\Request $request, \Throwable $e)
     * @see \Illuminate\Foundation\Exceptions\Handler::map
     * @method static \Illuminate\Foundation\Exceptions\Handler map(string $from, null|string $to = null)
     * @see \Illuminate\Foundation\Exceptions\Handler::renderForConsole
     * @method static void renderForConsole(\Symfony\Component\Console\Output\OutputInterface $output, \Throwable $e)
     * @see \Illuminate\Foundation\Exceptions\Handler::dontFlash
     * @method static \Illuminate\Foundation\Exceptions\Handler dontFlash(array|string $attributes)
     * @see \Illuminate\Foundation\Exceptions\Handler::report
     * @method static void report(\Throwable $e)
     * @see \Illuminate\Foundation\Exceptions\Handler::register
     * @method static void register()
     * @see \Illuminate\Foundation\Exceptions\Handler::throttleUsing
     * @method static \Illuminate\Foundation\Exceptions\Handler throttleUsing(callable $throttleUsing)
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::handler
     * @method static \Illuminate\Contracts\Debug\ExceptionHandler handler()
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::throwFirstReported
     * @method static \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake throwFirstReported()
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::assertReportedCount
     * @method static void assertReportedCount(int $count)
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::assertReported
     * @method static void assertReported(\Closure|string $exception)
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::assertNotReported
     * @method static void assertNotReported(\Closure|string $exception)
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::throwOnReport
     * @method static \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake throwOnReport()
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::assertNothingReported
     * @method static void assertNothingReported()
     * @see \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake::setHandler
     * @method static \Illuminate\Support\Testing\Fakes\ExceptionHandlerFake setHandler(\Illuminate\Contracts\Debug\ExceptionHandler $handler)
     */
    class Exceptions {}

    /**
     * @see \Illuminate\Filesystem\Filesystem::ensureDirectoryExists
     * @method static void ensureDirectoryExists(string $path, int $mode = 0755, bool $recursive = true)
     * @see \Illuminate\Filesystem\Filesystem::isWritable
     * @method static bool isWritable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::prepend
     * @method static bool|int prepend(string $path, string $data)
     * @see \Illuminate\Filesystem\Filesystem::replace
     * @method static void replace(string $path, string $content, int|null $mode = null)
     * @see \Illuminate\Filesystem\Filesystem::type
     * @method static string type(string $path)
     * @see \Illuminate\Filesystem\Filesystem::dirname
     * @method static string dirname(string $path)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Filesystem\Filesystem::put
     * @method static bool|int put(string $path, string $contents, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::copyDirectory
     * @method static bool copyDirectory(string $directory, string $destination, int|null $options = null)
     * @see \Illuminate\Filesystem\Filesystem::hasSameHash
     * @method static bool hasSameHash(string $firstFile, string $secondFile)
     * @see \Illuminate\Filesystem\Filesystem::relativeLink
     * @method static void relativeLink(string $target, string $link)
     * @see \Illuminate\Filesystem\Filesystem::isFile
     * @method static bool isFile(string $file)
     * @see \Illuminate\Filesystem\Filesystem::guessExtension
     * @method static null|string guessExtension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::getRequire
     * @method static mixed getRequire(string $path, array $data = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Filesystem\Filesystem::basename
     * @method static string basename(string $path)
     * @see \Illuminate\Filesystem\Filesystem::isEmptyDirectory
     * @method static bool isEmptyDirectory(string $directory, bool $ignoreDotFiles = false)
     * @see \Illuminate\Filesystem\Filesystem::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\Filesystem::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Filesystem\Filesystem::isReadable
     * @method static bool isReadable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::name
     * @method static string name(string $path)
     * @see \Illuminate\Filesystem\Filesystem::files
     * @method static \Symfony\Component\Finder\SplFileInfo[] files(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::cleanDirectory
     * @method static bool cleanDirectory(string $directory)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Filesystem\Filesystem::hash
     * @method static false|string hash(string $path, string $algorithm = 'md5')
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectories
     * @method static bool deleteDirectories(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::extension
     * @method static string extension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::link
     * @method static bool|null link(string $target, string $link)
     * @see \Illuminate\Filesystem\Filesystem::glob
     * @method static array glob(string $pattern, int $flags = 0)
     * @see \Illuminate\Filesystem\Filesystem::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Filesystem\Filesystem::requireOnce
     * @method static mixed requireOnce(string $path, array $data = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Filesystem\Filesystem::get
     * @method static string get(string $path, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::missing
     * @method static bool missing(string $path)
     * @see \Illuminate\Filesystem\Filesystem::directories
     * @method static array directories(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::chmod
     * @method static mixed chmod(string $path, int|null $mode = null)
     * @see \Illuminate\Filesystem\Filesystem::json
     * @method static array json(string $path, int $flags = 0, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::copy
     * @method static bool copy(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::lines
     * @method static \Illuminate\Support\LazyCollection lines(string $path)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Filesystem\Filesystem::move
     * @method static bool move(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::isDirectory
     * @method static bool isDirectory(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::moveDirectory
     * @method static bool moveDirectory(string $from, string $to, bool $overwrite = false)
     * @see \Illuminate\Filesystem\Filesystem::sharedGet
     * @method static string sharedGet(string $path)
     * @see \Illuminate\Filesystem\Filesystem::replaceInFile
     * @method static void replaceInFile(array|string $search, array|string $replace, string $path)
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectory
     * @method static bool deleteDirectory(string $directory, bool $preserve = false)
     * @see \Illuminate\Filesystem\Filesystem::makeDirectory
     * @method static bool makeDirectory(string $path, int $mode = 0755, bool $recursive = false, bool $force = false)
     * @see \Illuminate\Filesystem\Filesystem::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Filesystem\Filesystem::mimeType
     * @method static false|string mimeType(string $path)
     * @see \Illuminate\Filesystem\Filesystem::allFiles
     * @method static \Symfony\Component\Finder\SplFileInfo[] allFiles(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::append
     * @method static int append(string $path, string $data, bool $lock = false)
     */
    class File {}

    /**
     * @see \Illuminate\Auth\Access\Gate::before
     * @method static \Illuminate\Auth\Access\Gate before(callable $callback)
     * @see \Illuminate\Auth\Access\Gate::getPolicyFor
     * @method static mixed getPolicyFor(object|string $class)
     * @see \Illuminate\Auth\Access\Gate::allowIf
     * @method static \Illuminate\Auth\Access\Response allowIf(bool|\Illuminate\Auth\Access\Response $condition, null|string $message = null, null|string $code = null)
     * @see \Illuminate\Auth\Access\Gate::policies
     * @method static array policies()
     * @see \Illuminate\Auth\Access\Gate::none
     * @method static bool none(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::denies
     * @method static bool denies(iterable|string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::denyIf
     * @method static \Illuminate\Auth\Access\Response denyIf(bool|\Illuminate\Auth\Access\Response $condition, null|string $message = null, null|string $code = null)
     * @see \Illuminate\Auth\Access\Gate::setContainer
     * @method static \Illuminate\Auth\Access\Gate setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Auth\Access\Gate::abilities
     * @method static array abilities()
     * @see \Illuminate\Auth\Access\HandlesAuthorization::denyWithStatus
     * @method static \Illuminate\Auth\Access\Response denyWithStatus(int $status, null|string $message = null, int|null $code = null)
     * @see \Illuminate\Auth\Access\Gate::defaultDenialResponse
     * @method static \Illuminate\Auth\Access\Gate defaultDenialResponse(\Illuminate\Auth\Access\Response $response)
     * @see \Illuminate\Auth\Access\Gate::define
     * @method static \Illuminate\Auth\Access\Gate define(string $ability, array|callable|string $callback)
     * @see \Illuminate\Auth\Access\Gate::after
     * @method static \Illuminate\Auth\Access\Gate after(callable $callback)
     * @see \Illuminate\Auth\Access\Gate::has
     * @method static bool has(array|string $ability)
     * @see \Illuminate\Auth\Access\Gate::authorize
     * @method static \Illuminate\Auth\Access\Response authorize(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::policy
     * @method static \Illuminate\Auth\Access\Gate policy(string $class, string $policy)
     * @see \Illuminate\Auth\Access\Gate::allows
     * @method static bool allows(iterable|string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\HandlesAuthorization::denyAsNotFound
     * @method static \Illuminate\Auth\Access\Response denyAsNotFound(null|string $message = null, int|null $code = null)
     * @see \Illuminate\Auth\Access\Gate::resource
     * @method static \Illuminate\Auth\Access\Gate resource(string $name, string $class, array|null $abilities = null)
     * @see \Illuminate\Auth\Access\Gate::raw
     * @method static mixed raw(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::check
     * @method static bool check(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::any
     * @method static bool any(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Access\Gate::resolvePolicy
     * @method static mixed resolvePolicy(object|string $class)
     * @see \Illuminate\Auth\Access\Gate::guessPolicyNamesUsing
     * @method static \Illuminate\Auth\Access\Gate guessPolicyNamesUsing(callable $callback)
     * @see \Illuminate\Auth\Access\Gate::forUser
     * @method static \Illuminate\Auth\Access\Gate forUser(\Illuminate\Contracts\Auth\Authenticatable|mixed $user)
     * @see \Illuminate\Auth\Access\Gate::inspect
     * @method static \Illuminate\Auth\Access\Response inspect(string $ability, array|mixed $arguments = [])
     */
    class Gate {}

    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Hashing\HashManager::createArgonDriver
     * @method static \Illuminate\Hashing\ArgonHasher createArgonDriver()
     * @see \Illuminate\Hashing\HashManager::check
     * @method static bool check(string $value, string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Hashing\HashManager::createBcryptDriver
     * @method static \Illuminate\Hashing\BcryptHasher createBcryptDriver()
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Hashing\HashManager::needsRehash
     * @method static bool needsRehash(string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Hashing\HashManager::verifyConfiguration
     * @method static bool verifyConfiguration(array $value)
     * @see \Illuminate\Hashing\HashManager::isHashed
     * @method static bool isHashed(string $value)
     * @see \Illuminate\Hashing\HashManager::make
     * @method static string make(string $value, array $options = [])
     * @see \Illuminate\Hashing\HashManager::createArgon2idDriver
     * @method static \Illuminate\Hashing\Argon2IdHasher createArgon2idDriver()
     * @see \Illuminate\Hashing\HashManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Hashing\HashManager::info
     * @method static array info(string $hashedValue)
     */
    class Hash {}

    /**
     * @see \Illuminate\Http\Client\Factory::assertSentCount
     * @method static void assertSentCount(int $count)
     * @see \Illuminate\Http\Client\PendingRequest::withoutRedirecting
     * @method static \Illuminate\Http\Client\PendingRequest withoutRedirecting()
     * @see \Illuminate\Http\Client\Factory::getGlobalMiddleware
     * @method static array getGlobalMiddleware()
     * @see \Illuminate\Http\Client\PendingRequest::runBeforeSendingCallbacks
     * @method static \GuzzleHttp\Psr7\RequestInterface runBeforeSendingCallbacks(\GuzzleHttp\Psr7\RequestInterface $request, array $options)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Http\Client\PendingRequest::put
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response put(string $url, array $data = [])
     * @see \Illuminate\Http\Client\PendingRequest::patch
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response patch(string $url, array $data = [])
     * @see \Illuminate\Http\Client\PendingRequest::asJson
     * @method static \Illuminate\Http\Client\PendingRequest asJson()
     * @see \Illuminate\Http\Client\PendingRequest::acceptJson
     * @method static \Illuminate\Http\Client\PendingRequest acceptJson()
     * @see \Illuminate\Http\Client\PendingRequest::withResponseMiddleware
     * @method static \Illuminate\Http\Client\PendingRequest withResponseMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\PendingRequest::mergeOptions
     * @method static array mergeOptions(...$options)
     * @see \Illuminate\Http\Client\PendingRequest::getPromise
     * @method static \GuzzleHttp\Promise\PromiseInterface|null getPromise()
     * @see \Illuminate\Http\Client\PendingRequest::buildStubHandler
     * @method static \Closure buildStubHandler()
     * @see \Illuminate\Http\Client\PendingRequest::pool
     * @method static \Illuminate\Http\Client\Response[] pool(callable $callback)
     * @see \Illuminate\Http\Client\PendingRequest::withHeader
     * @method static \Illuminate\Http\Client\PendingRequest withHeader(string $name, $value)
     * @see \Illuminate\Http\Client\PendingRequest::withBasicAuth
     * @method static \Illuminate\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\PendingRequest::accept
     * @method static \Illuminate\Http\Client\PendingRequest accept(string $contentType)
     * @see \Illuminate\Http\Client\PendingRequest::withoutVerifying
     * @method static \Illuminate\Http\Client\PendingRequest withoutVerifying()
     * @see \Illuminate\Http\Client\PendingRequest::withHeaders
     * @method static \Illuminate\Http\Client\PendingRequest withHeaders(array $headers)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Http\Client\PendingRequest::withMiddleware
     * @method static \Illuminate\Http\Client\PendingRequest withMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getDispatcher()
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Http\Client\PendingRequest::get
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response get(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\PendingRequest::setClient
     * @method static \Illuminate\Http\Client\PendingRequest setClient(\GuzzleHttp\Client $client)
     * @see \Illuminate\Http\Client\Factory::assertSequencesAreEmpty
     * @method static void assertSequencesAreEmpty()
     * @see \Illuminate\Http\Client\PendingRequest::attach
     * @method static \Illuminate\Http\Client\PendingRequest attach(array|string $name, resource|string $contents = '', null|string $filename = null, array $headers = [])
     * @see \Illuminate\Http\Client\PendingRequest::replaceHeaders
     * @method static \Illuminate\Http\Client\PendingRequest replaceHeaders(array $headers)
     * @see \Illuminate\Http\Client\PendingRequest::connectTimeout
     * @method static \Illuminate\Http\Client\PendingRequest connectTimeout(int $seconds)
     * @see \Illuminate\Http\Client\PendingRequest::withOptions
     * @method static \Illuminate\Http\Client\PendingRequest withOptions(array $options)
     * @see \Illuminate\Http\Client\Factory::assertSent
     * @method static void assertSent(callable $callback)
     * @see \Illuminate\Http\Client\PendingRequest::beforeSending
     * @method static \Illuminate\Http\Client\PendingRequest beforeSending(callable $callback)
     * @see \Illuminate\Http\Client\PendingRequest::throw
     * @method static \Illuminate\Http\Client\PendingRequest throw(callable|null $callback = null)
     * @see \Illuminate\Http\Client\Factory::fake
     * @method static \Illuminate\Http\Client\Factory fake(array|callable|null $callback = null)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Http\Client\PendingRequest::asMultipart
     * @method static \Illuminate\Http\Client\PendingRequest asMultipart()
     * @see \Illuminate\Http\Client\Factory::assertNotSent
     * @method static void assertNotSent(callable $callback)
     * @see \Illuminate\Http\Client\PendingRequest::withToken
     * @method static \Illuminate\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
     * @see \Illuminate\Http\Client\PendingRequest::dd
     * @method static \Illuminate\Http\Client\PendingRequest dd()
     * @see \Illuminate\Http\Client\Factory::fakeSequence
     * @method static \Illuminate\Http\Client\ResponseSequence fakeSequence(string $url = '*')
     * @see \Illuminate\Http\Client\Factory::globalRequestMiddleware
     * @method static \Illuminate\Http\Client\Factory globalRequestMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\PendingRequest::withDigestAuth
     * @method static \Illuminate\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\PendingRequest::withRequestMiddleware
     * @method static \Illuminate\Http\Client\PendingRequest withRequestMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\PendingRequest::getOptions
     * @method static array getOptions()
     * @see \Illuminate\Http\Client\PendingRequest::withQueryParameters
     * @method static \Illuminate\Http\Client\PendingRequest withQueryParameters(array $parameters)
     * @see \Illuminate\Http\Client\PendingRequest::post
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response post(string $url, array $data = [])
     * @see \Illuminate\Http\Client\PendingRequest::buildClient
     * @method static \GuzzleHttp\Client buildClient()
     * @see \Illuminate\Http\Client\PendingRequest::stub
     * @method static \Illuminate\Http\Client\PendingRequest stub(callable $callback)
     * @see \Illuminate\Http\Client\PendingRequest::throwUnless
     * @method static \Illuminate\Http\Client\PendingRequest throwUnless(bool|callable $condition)
     * @see \Illuminate\Http\Client\PendingRequest::withUserAgent
     * @method static \Illuminate\Http\Client\PendingRequest withUserAgent(bool|string $userAgent)
     * @see \Illuminate\Http\Client\PendingRequest::withBody
     * @method static \Illuminate\Http\Client\PendingRequest withBody(\Psr\Http\Message\StreamInterface|string $content, string $contentType = 'application/json')
     * @see \Illuminate\Http\Client\PendingRequest::buildHandlerStack
     * @method static \GuzzleHttp\HandlerStack buildHandlerStack()
     * @see \Illuminate\Http\Client\Factory::recordRequestResponsePair
     * @method static void recordRequestResponsePair(\Illuminate\Http\Client\Request $request, \Illuminate\Http\Client\Response $response)
     * @see \Illuminate\Http\Client\PendingRequest::createClient
     * @method static \GuzzleHttp\Client createClient(\GuzzleHttp\HandlerStack $handlerStack)
     * @see \Illuminate\Http\Client\PendingRequest::withCookies
     * @method static \Illuminate\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
     * @see \Illuminate\Http\Client\PendingRequest::sink
     * @method static \Illuminate\Http\Client\PendingRequest sink(resource|string $to)
     * @see \Illuminate\Http\Client\PendingRequest::maxRedirects
     * @method static \Illuminate\Http\Client\PendingRequest maxRedirects(int $max)
     * @see \Illuminate\Http\Client\PendingRequest::pushHandlers
     * @method static \GuzzleHttp\HandlerStack pushHandlers(\GuzzleHttp\HandlerStack $handlerStack)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Http\Client\Factory::sequence
     * @method static \Illuminate\Http\Client\ResponseSequence sequence(array $responses = [])
     * @see \Illuminate\Http\Client\PendingRequest::withUrlParameters
     * @method static \Illuminate\Http\Client\PendingRequest withUrlParameters(array $parameters = [])
     * @see \Illuminate\Http\Client\Factory::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Http\Client\PendingRequest::send
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
     * @see \Illuminate\Http\Client\PendingRequest::buildBeforeSendingHandler
     * @method static \Closure buildBeforeSendingHandler()
     * @see \Illuminate\Http\Client\PendingRequest::throwIf
     * @method static \Illuminate\Http\Client\PendingRequest throwIf(bool|callable $condition)
     * @see \Illuminate\Http\Client\Factory::createPendingRequest
     * @method static \Illuminate\Http\Client\PendingRequest createPendingRequest()
     * @see \Illuminate\Http\Client\Factory::assertSentInOrder
     * @method static void assertSentInOrder(array $callbacks)
     * @see \Illuminate\Http\Client\PendingRequest::delete
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response delete(string $url, array $data = [])
     * @see \Illuminate\Http\Client\PendingRequest::timeout
     * @method static \Illuminate\Http\Client\PendingRequest timeout(int $seconds)
     * @see \Illuminate\Http\Client\PendingRequest::head
     * @method static \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response head(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\PendingRequest::buildRecorderHandler
     * @method static \Closure buildRecorderHandler()
     * @see \Illuminate\Http\Client\PendingRequest::baseUrl
     * @method static \Illuminate\Http\Client\PendingRequest baseUrl(string $url)
     * @see \Illuminate\Http\Client\Factory::globalMiddleware
     * @method static \Illuminate\Http\Client\Factory globalMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\PendingRequest::dump
     * @method static \Illuminate\Http\Client\PendingRequest dump()
     * @see \Illuminate\Http\Client\Factory::preventStrayRequests
     * @method static \Illuminate\Http\Client\Factory preventStrayRequests(bool $prevent = true)
     * @see \Illuminate\Http\Client\PendingRequest::retry
     * @method static \Illuminate\Http\Client\PendingRequest retry(array|int $times, \Closure|int $sleepMilliseconds = 0, callable|null $when = null, bool $throw = true)
     * @see \Illuminate\Http\Client\Factory::globalResponseMiddleware
     * @method static \Illuminate\Http\Client\Factory globalResponseMiddleware(callable $middleware)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Http\Client\Factory::allowStrayRequests
     * @method static \Illuminate\Http\Client\Factory allowStrayRequests()
     * @see \Illuminate\Http\Client\PendingRequest::bodyFormat
     * @method static \Illuminate\Http\Client\PendingRequest bodyFormat(string $format)
     * @see \Illuminate\Http\Client\Factory::recorded
     * @method static \Illuminate\Support\Collection recorded(callable $callback = null)
     * @see \Illuminate\Http\Client\PendingRequest::contentType
     * @method static \Illuminate\Http\Client\PendingRequest contentType(string $contentType)
     * @see \Illuminate\Http\Client\PendingRequest::async
     * @method static \Illuminate\Http\Client\PendingRequest async(bool $async = true)
     * @see \Illuminate\Http\Client\Factory::response
     * @method static \GuzzleHttp\Promise\PromiseInterface response(array|null|string $body = null, int $status = 200, array $headers = [])
     * @see \Illuminate\Http\Client\Factory::globalOptions
     * @method static \Illuminate\Http\Client\Factory globalOptions(array $options)
     * @see \Illuminate\Http\Client\PendingRequest::setHandler
     * @method static \Illuminate\Http\Client\PendingRequest setHandler(callable $handler)
     * @see \Illuminate\Http\Client\Factory::stubUrl
     * @method static \Illuminate\Http\Client\Factory stubUrl(string $url, callable|\GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response $callback)
     * @see \Illuminate\Http\Client\PendingRequest::asForm
     * @method static \Illuminate\Http\Client\PendingRequest asForm()
     */
    class Http {}

    /**
     * @see \Illuminate\Translation\Translator::parseKey
     * @method static array parseKey(string $key)
     * @see \Illuminate\Translation\Translator::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Translation\Translator::addJsonPath
     * @method static void addJsonPath(string $path)
     * @see \Illuminate\Translation\Translator::locale
     * @method static string locale()
     * @see \Illuminate\Translation\Translator::handleMissingKeysUsing
     * @method static \Illuminate\Translation\Translator handleMissingKeysUsing(callable|null $callback)
     * @see \Illuminate\Translation\Translator::setFallback
     * @method static void setFallback(string $fallback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Translation\Translator::load
     * @method static void load(string $namespace, string $group, string $locale)
     * @see \Illuminate\Translation\Translator::get
     * @method static array|null|string get(string $key, array $replace = [], null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::hasForLocale
     * @method static bool hasForLocale(string $key, null|string $locale = null)
     * @see \Illuminate\Translation\Translator::setLoaded
     * @method static void setLoaded(array $loaded)
     * @see \Illuminate\Translation\Translator::has
     * @method static bool has(string $key, null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::determineLocalesUsing
     * @method static void determineLocalesUsing(callable $callback)
     * @see \Illuminate\Support\NamespacedItemResolver::setParsedKey
     * @method static void setParsedKey(string $key, array $parsed)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Translation\Translator::addNamespace
     * @method static void addNamespace(string $namespace, string $hint)
     * @see \Illuminate\Translation\Translator::getFallback
     * @method static string getFallback()
     * @see \Illuminate\Translation\Translator::stringable
     * @method static void stringable(callable|string $class, callable|null $handler = null)
     * @see \Illuminate\Support\NamespacedItemResolver::flushParsedKeys
     * @method static void flushParsedKeys()
     * @see \Illuminate\Translation\Translator::getLoader
     * @method static \Illuminate\Contracts\Translation\Loader getLoader()
     * @see \Illuminate\Translation\Translator::getSelector
     * @method static \Illuminate\Translation\MessageSelector getSelector()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Translation\Translator::addLines
     * @method static void addLines(array $lines, string $locale, string $namespace = '*')
     * @see \Illuminate\Translation\Translator::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Translation\Translator::choice
     * @method static string choice(string $key, array|\Countable|float|int $number, array $replace = [], null|string $locale = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Translation\Translator::setSelector
     * @method static void setSelector(\Illuminate\Translation\MessageSelector $selector)
     */
    class Lang {}

    /**
     * @see \Illuminate\Log\LogManager::stack
     * @method static \Psr\Log\LoggerInterface stack(array $channels, null|string $channel = null)
     * @see \Illuminate\Log\LogManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Log\LogManager::flushSharedContext
     * @method static \Illuminate\Log\LogManager flushSharedContext()
     * @see \Illuminate\Log\LogManager::channel
     * @method static \Psr\Log\LoggerInterface channel(null|string $channel = null)
     * @see \Illuminate\Log\LogManager::emergency
     * @method static void emergency(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\Logger::withContext
     * @method static \Illuminate\Log\Logger withContext(array $context = [])
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\Logger::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Log\LogManager::warning
     * @method static void warning(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\Logger::write
     * @method static void write(string $level, array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\LogManager::info
     * @method static void info(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\LogManager::sharedContext
     * @method static array sharedContext()
     * @see \Illuminate\Log\Logger::getLogger
     * @method static \Psr\Log\LoggerInterface getLogger()
     * @see \Illuminate\Log\LogManager::extend
     * @method static \Illuminate\Log\LogManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Log\LogManager::driver
     * @method static \Psr\Log\LoggerInterface driver(null|string $driver = null)
     * @see \Illuminate\Log\LogManager::getDefaultDriver
     * @method static null|string getDefaultDriver()
     * @see \Illuminate\Log\LogManager::critical
     * @method static void critical(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\LogManager::getChannels
     * @method static array getChannels()
     * @see \Illuminate\Log\LogManager::log
     * @method static void log($level, string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\LogManager::forgetChannel
     * @method static void forgetChannel(null|string $driver = null)
     * @see \Illuminate\Log\LogManager::error
     * @method static void error(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\Logger::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
     * @see \Illuminate\Log\LogManager::alert
     * @method static void alert(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\Logger::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getEventDispatcher()
     * @see \Illuminate\Log\LogManager::setApplication
     * @method static \Illuminate\Log\LogManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Log\LogManager::notice
     * @method static void notice(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\LogManager::shareContext
     * @method static \Illuminate\Log\LogManager shareContext(array $context)
     * @see \Illuminate\Log\LogManager::debug
     * @method static void debug(string|\Stringable $message, array $context = [])
     * @see \Illuminate\Log\LogManager::build
     * @method static \Psr\Log\LoggerInterface build(array $config)
     * @see \Illuminate\Log\LogManager::withoutContext
     * @method static \Illuminate\Log\LogManager withoutContext()
     */
    class Log {}

    /**
     * @see \Illuminate\Mail\Mailer::alwaysReplyTo
     * @method static void alwaysReplyTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\MailManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Mail\Mailer::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view, null|string $queue = null)
     * @see \Illuminate\Mail\Mailer::plain
     * @method static \Illuminate\Mail\SentMessage|null plain(string $view, array $data, $callback)
     * @see \Illuminate\Mail\Mailer::html
     * @method static \Illuminate\Mail\SentMessage|null html(string $html, $callback)
     * @see \Illuminate\Mail\Mailer::getViewFactory
     * @method static \Illuminate\Contracts\View\Factory getViewFactory()
     * @see \Illuminate\Mail\Mailer::alwaysFrom
     * @method static void alwaysFrom(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::raw
     * @method static \Illuminate\Mail\SentMessage|null raw(string $text, $callback)
     * @see \Illuminate\Mail\MailManager::getApplication
     * @method static \Illuminate\Contracts\Foundation\Application getApplication()
     * @see \Illuminate\Mail\MailManager::mailer
     * @method static \Illuminate\Contracts\Mail\Mailer|\Illuminate\Mail\Mailer mailer(null|string $name = null)
     * @see \Illuminate\Mail\Mailer::alwaysReturnPath
     * @method static void alwaysReturnPath(string $address)
     * @see \Illuminate\Mail\MailManager::extend
     * @method static \Illuminate\Mail\MailManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Mail\Mailer::setQueue
     * @method static \Illuminate\Mail\Mailer setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @see \Illuminate\Mail\MailManager::driver
     * @method static \Illuminate\Contracts\Mail\Mailer|\Illuminate\Mail\Mailer driver(null|string $driver = null)
     * @see \Illuminate\Mail\Mailer::send
     * @method static \Illuminate\Mail\SentMessage|null send(array|\Illuminate\Contracts\Mail\Mailable|string $view, array $data = [], null|string $callback = null)
     * @see \Illuminate\Mail\Mailer::queueOn
     * @method static mixed queueOn(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Mail\MailManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Mail\Mailer::bcc
     * @method static \Illuminate\Mail\PendingMail bcc($users, null|string $name = null)
     * @see \Illuminate\Mail\MailManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Mail\Mailer::sendNow
     * @method static \Illuminate\Mail\SentMessage|null sendNow(array|\Illuminate\Contracts\Mail\Mailable|string $mailable, array $data = [], null|string $callback = null)
     * @see \Illuminate\Mail\Mailer::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Mail\MailManager::setApplication
     * @method static \Illuminate\Mail\MailManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Mail\Mailer::alwaysTo
     * @method static void alwaysTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::render
     * @method static string render(array|string $view, array $data = [])
     * @see \Illuminate\Mail\Mailer::cc
     * @method static \Illuminate\Mail\PendingMail cc($users, null|string $name = null)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Mail\Mailer::setSymfonyTransport
     * @method static void setSymfonyTransport(\Symfony\Component\Mailer\Transport\TransportInterface $transport)
     * @see \Illuminate\Mail\Mailer::onQueue
     * @method static mixed onQueue(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\MailManager::createSymfonyTransport
     * @method static \Symfony\Component\Mailer\Transport\TransportInterface createSymfonyTransport(array $config)
     * @see \Illuminate\Mail\MailManager::forgetMailers
     * @method static \Illuminate\Mail\MailManager forgetMailers()
     * @see \Illuminate\Mail\Mailer::to
     * @method static \Illuminate\Mail\PendingMail to($users, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::getSymfonyTransport
     * @method static \Symfony\Component\Mailer\Transport\TransportInterface getSymfonyTransport()
     * @see \Illuminate\Mail\Mailer::queue
     * @method static mixed queue(array|\Illuminate\Contracts\Mail\Mailable|string $view, null|string $queue = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertSentCount
     * @method static void assertSentCount(int $count)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::queued
     * @method static \Illuminate\Support\Collection queued(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingQueued
     * @method static void assertNothingQueued()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotOutgoing
     * @method static void assertNotOutgoing(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotQueued
     * @method static void assertNotQueued(string $mailable, array|callable|null|string $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertOutgoingCount
     * @method static void assertOutgoingCount(int $count)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasSent
     * @method static bool hasSent(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::sent
     * @method static \Illuminate\Support\Collection sent(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertQueuedCount
     * @method static void assertQueuedCount(int $count)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertQueued
     * @method static void assertQueued(string $mailable, array|callable|int|null|string $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertSent
     * @method static void assertSent(string $mailable, array|callable|int|null|string $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasQueued
     * @method static bool hasQueued(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingOutgoing
     * @method static void assertNothingOutgoing()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotSent
     * @method static void assertNotSent(string $mailable, array|callable|null|string $callback = null)
     */
    class Mail {}

    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Notifications\ChannelManager::channel
     * @method static mixed channel(null|string $name = null)
     * @see \Illuminate\Notifications\ChannelManager::locale
     * @method static \Illuminate\Notifications\ChannelManager locale(string $locale)
     * @see \Illuminate\Notifications\ChannelManager::sendNow
     * @method static void sendNow(array|\Illuminate\Support\Collection|mixed $notifiables, $notification, array|null $channels = null)
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Notifications\ChannelManager::deliverVia
     * @method static void deliverVia(string $channel)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Notifications\ChannelManager::send
     * @method static void send(array|\Illuminate\Support\Collection|mixed $notifiables, $notification)
     * @see \Illuminate\Notifications\ChannelManager::deliversVia
     * @method static string deliversVia()
     * @see \Illuminate\Notifications\ChannelManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentToTimes
     * @method static void assertSentToTimes($notifiable, string $notification, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertCount
     * @method static void assertCount(int $expectedCount)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertNotSentTo
     * @method static void assertNotSentTo($notifiable, string $notification, callable|null $callback = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentOnDemand
     * @method static void assertSentOnDemand(string $notification, callable|null $callback = null)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentOnDemandTimes
     * @method static void assertSentOnDemandTimes(string $notification, int $times = 1)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::sentNotifications
     * @method static array sentNotifications()
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::hasSent
     * @method static bool hasSent($notifiable, string $notification)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::sent
     * @method static \Illuminate\Support\Collection sent($notifiable, string $notification, callable|null $callback = null)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::serializeAndRestore
     * @method static \Illuminate\Support\Testing\Fakes\NotificationFake serializeAndRestore(bool $serializeAndRestore = true)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentTimes
     * @method static void assertSentTimes(string $notification, int $expectedCount)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentTo
     * @method static void assertSentTo($notifiable, string $notification, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake::assertNothingSentTo
     * @method static void assertNothingSentTo($notifiable)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Notification {}

    /**
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestCaseCallbacks
     * @method static void callSetUpTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::resolveTokenUsing
     * @method static void resolveTokenUsing(null $resolver)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownProcessCallbacks
     * @method static void callTearDownProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::resolveOptionsUsing
     * @method static void resolveOptionsUsing(null $resolver)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpProcessCallbacks
     * @method static void callSetUpProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::token
     * @method static false|string token()
     * @see \Illuminate\Testing\ParallelTesting::setUpTestDatabase
     * @method static void setUpTestDatabase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::tearDownProcess
     * @method static void tearDownProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::setUpProcess
     * @method static void setUpProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestDatabaseCallbacks
     * @method static void callSetUpTestDatabaseCallbacks(string $database)
     * @see \Illuminate\Testing\ParallelTesting::tearDownTestCase
     * @method static void tearDownTestCase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownTestCaseCallbacks
     * @method static void callTearDownTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::option
     * @method static mixed option(string $option)
     * @see \Illuminate\Testing\ParallelTesting::setUpTestCase
     * @method static void setUpTestCase(callable $callback)
     */
    class ParallelTesting {}

    /**
     * @see \Illuminate\Contracts\Auth\PasswordBroker::sendResetLink
     * @method static string sendResetLink(array $credentials, \Closure|null $callback = null)
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Contracts\Auth\PasswordBroker::reset
     * @method static mixed reset(array $credentials, \Closure $callback)
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager::broker
     * @method static \Illuminate\Auth\Passwords\PasswordBroker|\Illuminate\Contracts\Auth\PasswordBroker broker(null|string $name = null)
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getRepository
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getUser
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|null getUser(array $credentials)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::deleteToken
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::createToken
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::tokenExists
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     */
    class Password {}

    /**
     * @see \Illuminate\Pipeline\Pipeline::through
     * @method static \Illuminate\Pipeline\Pipeline through(array|mixed $pipes)
     * @see \Illuminate\Pipeline\Pipeline::then
     * @method static mixed then(\Closure $destination)
     * @see \Illuminate\Pipeline\Pipeline::thenReturn
     * @method static mixed thenReturn()
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Pipeline\Pipeline::setContainer
     * @method static \Illuminate\Pipeline\Pipeline setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Pipeline\Pipeline::via
     * @method static \Illuminate\Pipeline\Pipeline via(string $method)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Pipeline\Pipeline::pipe
     * @method static \Illuminate\Pipeline\Pipeline pipe(array|mixed $pipes)
     * @see \Illuminate\Pipeline\Pipeline::send
     * @method static \Illuminate\Pipeline\Pipeline send($passable)
     */
    class Pipeline {}

    /**
     * @see \Illuminate\Process\PendingProcess::withFakeHandlers
     * @method static \Illuminate\Process\PendingProcess withFakeHandlers(array $fakeHandlers)
     * @see \Illuminate\Process\PendingProcess::start
     * @method static \Illuminate\Process\InvokedProcess start(array|null|string $command = null, callable|null $output = null)
     * @see \Illuminate\Process\PendingProcess::run
     * @method static \Illuminate\Contracts\Process\ProcessResult|\Illuminate\Process\ProcessResult run(array|null|string $command = null, callable|null $output = null)
     * @see \Illuminate\Process\PendingProcess::env
     * @method static \Illuminate\Process\PendingProcess env(array $environment)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Process\PendingProcess::command
     * @method static \Illuminate\Process\PendingProcess command(array|string $command)
     * @see \Illuminate\Process\PendingProcess::timeout
     * @method static \Illuminate\Process\PendingProcess timeout(int $timeout)
     * @see \Illuminate\Process\PendingProcess::idleTimeout
     * @method static \Illuminate\Process\PendingProcess idleTimeout(int $timeout)
     * @see \Illuminate\Process\PendingProcess::input
     * @method static \Illuminate\Process\PendingProcess input(bool|float|int|null|resource|string|\Traversable $input)
     * @see \Illuminate\Process\PendingProcess::path
     * @method static \Illuminate\Process\PendingProcess path(string $path)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Process\PendingProcess::options
     * @method static \Illuminate\Process\PendingProcess options(array $options)
     * @see \Illuminate\Process\PendingProcess::tty
     * @method static \Illuminate\Process\PendingProcess tty(bool $tty = true)
     * @see \Illuminate\Process\PendingProcess::forever
     * @method static \Illuminate\Process\PendingProcess forever()
     * @see \Illuminate\Process\PendingProcess::quietly
     * @method static \Illuminate\Process\PendingProcess quietly()
     * @see \Illuminate\Process\Factory::assertRan
     * @method static \Illuminate\Process\Factory assertRan(\Closure|string $callback)
     * @see \Illuminate\Process\Factory::newPendingProcess
     * @method static \Illuminate\Process\PendingProcess newPendingProcess()
     * @see \Illuminate\Process\Factory::isRecording
     * @method static bool isRecording()
     * @see \Illuminate\Process\Factory::result
     * @method static \Illuminate\Process\FakeProcessResult result(array|string $output = '', array|string $errorOutput = '', int $exitCode = 0)
     * @see \Illuminate\Process\Factory::preventingStrayProcesses
     * @method static bool preventingStrayProcesses()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Process\Factory::record
     * @method static \Illuminate\Process\Factory record(\Illuminate\Process\PendingProcess $process, \Illuminate\Contracts\Process\ProcessResult $result)
     * @see \Illuminate\Process\Factory::assertNotRan
     * @method static \Illuminate\Process\Factory assertNotRan(\Closure|string $callback)
     * @see \Illuminate\Process\Factory::concurrently
     * @method static \Illuminate\Process\ProcessPoolResults concurrently(callable $callback, callable|null $output = null)
     * @see \Illuminate\Process\Factory::pipe
     * @method static \Illuminate\Contracts\Process\ProcessResult pipe(array|callable $callback, callable|null $output = null)
     * @see \Illuminate\Process\Factory::assertDidntRun
     * @method static \Illuminate\Process\Factory assertDidntRun(\Closure|string $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Process\Factory::assertRanTimes
     * @method static \Illuminate\Process\Factory assertRanTimes(\Closure|string $callback, int $times = 1)
     * @see \Illuminate\Process\Factory::assertNothingRan
     * @method static \Illuminate\Process\Factory assertNothingRan()
     * @see \Illuminate\Process\Factory::preventStrayProcesses
     * @method static \Illuminate\Process\Factory preventStrayProcesses(bool $prevent = true)
     * @see \Illuminate\Process\Factory::pool
     * @method static \Illuminate\Process\Pool pool(callable $callback)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Process\Factory::sequence
     * @method static \Illuminate\Process\FakeProcessSequence sequence(array $processes = [])
     * @see \Illuminate\Process\Factory::fake
     * @method static \Illuminate\Process\Factory fake(array|\Closure|null $callback = null)
     * @see \Illuminate\Process\Factory::describe
     * @method static \Illuminate\Process\FakeProcessDescription describe()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Process\Factory::recordIfRecording
     * @method static \Illuminate\Process\Factory recordIfRecording(\Illuminate\Process\PendingProcess $process, \Illuminate\Contracts\Process\ProcessResult $result)
     */
    class Process {}

    /**
     * @see \Illuminate\Queue\QueueManager::addConnector
     * @method static void addConnector(string $driver, \Closure $resolver)
     * @see \Illuminate\Contracts\Queue\Queue::setConnectionName
     * @method static \Illuminate\Contracts\Queue\Queue setConnectionName(string $name)
     * @see \Illuminate\Queue\QueueManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Queue\QueueManager::before
     * @method static void before($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pop
     * @method static \Illuminate\Contracts\Queue\Job|null pop(null|string $queue = null)
     * @see \Illuminate\Contracts\Queue\Queue::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::setApplication
     * @method static \Illuminate\Queue\QueueManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Queue\QueueManager::connection
     * @method static \Illuminate\Contracts\Queue\Queue connection(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::after
     * @method static void after($callback)
     * @see \Illuminate\Queue\QueueManager::looping
     * @method static void looping($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushRaw
     * @method static mixed pushRaw(string $payload, null|string $queue = null, array $options = [])
     * @see \Illuminate\Queue\QueueManager::getApplication
     * @method static \Illuminate\Contracts\Foundation\Application getApplication()
     * @see \Illuminate\Queue\QueueManager::exceptionOccurred
     * @method static void exceptionOccurred($callback)
     * @see \Illuminate\Contracts\Queue\Queue::getConnectionName
     * @method static string getConnectionName()
     * @see \Illuminate\Contracts\Queue\Queue::push
     * @method static mixed push(object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::connected
     * @method static bool connected(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::extend
     * @method static void extend(string $driver, \Closure $resolver)
     * @see \Illuminate\Queue\QueueManager::getName
     * @method static string getName(null|string $connection = null)
     * @see \Illuminate\Contracts\Queue\Queue::size
     * @method static int size(null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::stopping
     * @method static void stopping($callback)
     * @see \Illuminate\Queue\QueueManager::failing
     * @method static void failing($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushOn
     * @method static mixed pushOn(string $queue, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::bulk
     * @method static mixed bulk(array $jobs, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Queue\Queue::setContainer
     * @method static void setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Queue\Queue::getContainer
     * @method static \Illuminate\Container\Container getContainer()
     * @see \Illuminate\Queue\Queue::getJobBackoff
     * @method static mixed getJobBackoff($job)
     * @see \Illuminate\Queue\Queue::getJobTries
     * @method static mixed getJobTries($job)
     * @see \Illuminate\Queue\Queue::createPayloadUsing
     * @method static void createPayloadUsing(callable|null $callback)
     * @see \Illuminate\Queue\Queue::getJobExpiration
     * @method static mixed getJobExpiration($job)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::hasPushed
     * @method static bool hasPushed(string $job)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertPushed
     * @method static void assertPushed(string $job, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedOn
     * @method static void assertPushedOn(string $queue, string $job, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::pushedJobs
     * @method static array pushedJobs()
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::serializeAndRestore
     * @method static \Illuminate\Support\Testing\Fakes\QueueFake serializeAndRestore(bool $serializeAndRestore = true)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::except
     * @method static \Illuminate\Support\Testing\Fakes\QueueFake except(array|string $jobsToBeQueued)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedWithoutChain
     * @method static void assertPushedWithoutChain(string $job, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertClosurePushed
     * @method static void assertClosurePushed(callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertNotPushed
     * @method static void assertNotPushed(string $job, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertCount
     * @method static void assertCount(int $expectedCount)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertClosureNotPushed
     * @method static void assertClosureNotPushed(callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::shouldFakeJob
     * @method static bool shouldFakeJob(object $job)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertNothingPushed
     * @method static void assertNothingPushed()
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedWithChain
     * @method static void assertPushedWithChain(string $job, array $expectedChain = [], callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\QueueFake::pushed
     * @method static \Illuminate\Support\Collection pushed(string $job, callable|null $callback = null)
     */
    class Queue {}

    /**
     * @see \Illuminate\Cache\RateLimiter::availableIn
     * @method static int availableIn(string $key)
     * @see \Illuminate\Cache\RateLimiter::retriesLeft
     * @method static int retriesLeft(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::for
     * @method static \Illuminate\Cache\RateLimiter for(string $name, \Closure $callback)
     * @see \Illuminate\Cache\RateLimiter::clear
     * @method static void clear(string $key)
     * @see \Illuminate\Cache\RateLimiter::increment
     * @method static int increment(string $key, int $decaySeconds = 60, int $amount = 1)
     * @see \Illuminate\Cache\RateLimiter::tooManyAttempts
     * @method static bool tooManyAttempts(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::attempt
     * @method static false|mixed attempt(string $key, int $maxAttempts, \Closure $callback, int $decaySeconds = 60)
     * @see \Illuminate\Cache\RateLimiter::remaining
     * @method static int remaining(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::hit
     * @method static int hit(string $key, int $decaySeconds = 60)
     * @see \Illuminate\Cache\RateLimiter::cleanRateLimiterKey
     * @method static string cleanRateLimiterKey(string $key)
     * @see \Illuminate\Cache\RateLimiter::resetAttempts
     * @method static mixed resetAttempts(string $key)
     * @see \Illuminate\Cache\RateLimiter::decrement
     * @method static int decrement(string $key, int $decaySeconds = 60, int $amount = 1)
     * @see \Illuminate\Cache\RateLimiter::limiter
     * @method static \Closure|null limiter(string $name)
     * @see \Illuminate\Cache\RateLimiter::attempts
     * @method static mixed attempts(string $key)
     */
    class RateLimiter {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Redirector::setSession
     * @method static void setSession(\Illuminate\Session\Store $session)
     * @see \Illuminate\Routing\Redirector::away
     * @method static \Illuminate\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::back
     * @method static \Illuminate\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
     * @see \Illuminate\Routing\Redirector::refresh
     * @method static \Illuminate\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::secure
     * @method static \Illuminate\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\Redirector::route
     * @method static \Illuminate\Http\RedirectResponse route(\BackedEnum|string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Redirector::setIntendedUrl
     * @method static \Illuminate\Routing\Redirector setIntendedUrl(string $url)
     * @see \Illuminate\Routing\Redirector::intended
     * @method static \Illuminate\Http\RedirectResponse intended($default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::signedRoute
     * @method static \Illuminate\Http\RedirectResponse signedRoute(\BackedEnum|string $route, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::temporarySignedRoute
     * @method static \Illuminate\Http\RedirectResponse temporarySignedRoute(\BackedEnum|string $route, \DateInterval|\DateTimeInterface|int|null $expiration, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::action
     * @method static \Illuminate\Http\RedirectResponse action(array|string $action, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::guest
     * @method static \Illuminate\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::to
     * @method static \Illuminate\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::getIntendedUrl
     * @method static null|string getIntendedUrl()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\Redirector::getUrlGenerator
     * @method static \Illuminate\Routing\UrlGenerator getUrlGenerator()
     */
    class Redirect {}

    /**
     * @see \Illuminate\Redis\Connections\Connection::throttle
     * @method static \Illuminate\Redis\Limiters\DurationLimiterBuilder throttle(string $name)
     * @see \Illuminate\Redis\RedisManager::resolve
     * @method static \Illuminate\Redis\Connections\Connection resolve(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::funnel
     * @method static \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder funnel(string $name)
     * @see \Illuminate\Redis\RedisManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::psubscribe
     * @method static void psubscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Redis\RedisManager::setDriver
     * @method static void setDriver(string $driver)
     * @see \Illuminate\Redis\Connections\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Redis\Connections\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Redis\Connections\Connection::client
     * @method static mixed|\Redis client()
     * @see \Illuminate\Redis\RedisManager::connection
     * @method static \Illuminate\Redis\Connections\Connection connection(null|string $name = null)
     * @see \Illuminate\Redis\RedisManager::connections
     * @method static array connections()
     * @see \Illuminate\Redis\Connections\Connection::createSubscription
     * @method static void createSubscription(array|string $channels, \Closure $callback, string $method = 'subscribe')
     * @see \Illuminate\Redis\RedisManager::enableEvents
     * @method static void enableEvents()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Redis\Connections\Connection::subscribe
     * @method static void subscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\RedisManager::disableEvents
     * @method static void disableEvents()
     * @see \Illuminate\Redis\Connections\Connection::command
     * @method static mixed command(string $method, array $parameters = [])
     * @see \Illuminate\Redis\RedisManager::extend
     * @method static \Illuminate\Redis\RedisManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Redis\Connections\Connection::setName
     * @method static \Illuminate\Redis\Connections\Connection setName(string $name)
     * @see \Illuminate\Redis\Connections\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Redis {}

    /**
     * @see \Illuminate\Http\Request::hasValidSignature
     * @method static bool hasValidSignature($absolute = true)
     * @see \Illuminate\Http\Request::hasValidSignatureWhileIgnoring
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @see \Illuminate\Http\Request::validateWithBag
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     * @see \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring
     * @method static bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     * @see \Illuminate\Http\Request::hasValidRelativeSignature
     * @method static bool hasValidRelativeSignature()
     * @see \Illuminate\Http\Request::validate
     * @method static array validate(array $rules, ...$params)
     * @see \Symfony\Component\HttpFoundation\Request::hasPreviousSession
     * @method static bool hasPreviousSession()
     * @see \Symfony\Component\HttpFoundation\Request::isMethod
     * @method static bool isMethod(string $method)
     * @see \Illuminate\Http\Request::getUserResolver
     * @method static \Closure getUserResolver()
     * @see \Illuminate\Http\Request::ajax
     * @method static bool ajax()
     * @see \Illuminate\Http\Request::setJson
     * @method static \Illuminate\Http\Request setJson(\Symfony\Component\HttpFoundation\InputBag $json)
     * @see \Illuminate\Http\Request::path
     * @method static string path()
     * @see \Symfony\Component\HttpFoundation\Request::isMethodIdempotent
     * @method static bool isMethodIdempotent()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasAny
     * @method static bool hasAny(array|string $keys)
     * @see \Illuminate\Http\Request::merge
     * @method static \Illuminate\Http\Request merge(array $input)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsHtml
     * @method static bool acceptsHtml()
     * @see \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost
     * @method static string getSchemeAndHttpHost()
     * @see \Illuminate\Http\Request::setRequestLocale
     * @method static void setRequestLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::getQueryString
     * @method static null|string getQueryString()
     * @see \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest
     * @method static bool isXmlHttpRequest()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::old
     * @method static array|\Illuminate\Database\Eloquent\Model|null|string old(null|string $key = null, array|\Illuminate\Database\Eloquent\Model|null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getBaseUrl
     * @method static string getBaseUrl()
     * @see \Illuminate\Http\Request::httpHost
     * @method static string httpHost()
     * @see \Illuminate\Http\Request::ips
     * @method static array ips()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::str
     * @method static \Illuminate\Support\Stringable str(string $key, $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::input
     * @method static mixed input(null|string $key = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride
     * @method static void enableHttpMethodParameterOverride()
     * @see \Illuminate\Http\Request::route
     * @method static \Illuminate\Routing\Route|null|object|string route(null|string $param = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getPathInfo
     * @method static string getPathInfo()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashOnly
     * @method static void flashOnly(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::except
     * @method static array except(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::getProtocolVersion
     * @method static null|string getProtocolVersion()
     * @see \Symfony\Component\HttpFoundation\Request::isMethodCacheable
     * @method static bool isMethodCacheable()
     * @see \Illuminate\Http\Request::decodedPath
     * @method static string decodedPath()
     * @see \Symfony\Component\HttpFoundation\Request::getRequestFormat
     * @method static null|string getRequestFormat(null|string $default = 'html')
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flash
     * @method static void flash()
     * @see \Symfony\Component\HttpFoundation\Request::setLocale
     * @method static void setLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::setDefaultLocale
     * @method static void setDefaultLocale(string $locale)
     * @see \Illuminate\Http\Request::fullUrlWithoutQuery
     * @method static string fullUrlWithoutQuery(array|string $keys)
     * @see \Symfony\Component\HttpFoundation\Request::setRequestFormat
     * @method static void setRequestFormat(null|string $format)
     * @see \Illuminate\Http\Request::userAgent
     * @method static null|string userAgent()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedProxies
     * @method static void setTrustedProxies(array $proxies, int $trustedHeaderSet)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::wantsJson
     * @method static bool wantsJson()
     * @see \Symfony\Component\HttpFoundation\Request::getETags
     * @method static array getETags()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Symfony\Component\HttpFoundation\Request::preferSafeContent
     * @method static bool preferSafeContent()
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::matchesType
     * @method static bool matchesType(string $actual, string $type)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedProxies
     * @method static string[] getTrustedProxies()
     * @see \Symfony\Component\HttpFoundation\Request::getDefaultLocale
     * @method static string getDefaultLocale()
     * @see \Symfony\Component\HttpFoundation\Request::getCharsets
     * @method static string[] getCharsets()
     * @see \Illuminate\Http\Request::getSession
     * @method static \Symfony\Component\HttpFoundation\Session\SessionInterface getSession()
     * @see \Symfony\Component\HttpFoundation\Request::getUserInfo
     * @method static null|string getUserInfo()
     * @see \Symfony\Component\HttpFoundation\Request::getHost
     * @method static string getHost()
     * @see \Symfony\Component\HttpFoundation\Request::getContentTypeFormat
     * @method static null|string getContentTypeFormat()
     * @see \Symfony\Component\HttpFoundation\Request::initialize
     * @method static void initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Illuminate\Support\Traits\Dumpable::dd
     * @method static \Illuminate\Support\Traits\never dd(...$args)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasFile
     * @method static bool hasFile(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::createFromGlobals
     * @method static \Symfony\Component\HttpFoundation\Request createFromGlobals()
     * @see \Illuminate\Http\Request::hasSession
     * @method static bool hasSession(bool $skipIfUninitialized = false)
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::isPrecognitive
     * @method static bool isPrecognitive()
     * @see \Illuminate\Http\Request::secure
     * @method static bool secure()
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::filterPrecognitiveRules
     * @method static array filterPrecognitiveRules(array $rules)
     * @see \Illuminate\Http\Request::createFromBase
     * @method static \Illuminate\Http\Request createFromBase(\Symfony\Component\HttpFoundation\Request $request)
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::isAttemptingPrecognition
     * @method static bool isAttemptingPrecognition()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::post
     * @method static array|null|string post(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::segment
     * @method static null|string segment(int $index, null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setFactory
     * @method static void setFactory(callable|null $callable)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::isJson
     * @method static bool isJson()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::query
     * @method static array|null|string query(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::duplicate
     * @method static \Illuminate\Http\Request duplicate(array|null $query = null, array|null $request = null, array|null $attributes = null, array|null $cookies = null, array|null $files = null, array|null $server = null)
     * @see \Illuminate\Http\Request::mergeIfMissing
     * @method static \Illuminate\Http\Request mergeIfMissing(array $input)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHosts
     * @method static string[] getTrustedHosts()
     * @see \Symfony\Component\HttpFoundation\Request::getBasePath
     * @method static string getBasePath()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Http\Request::offsetGet
     * @method static mixed offsetGet(string $offset)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::string
     * @method static \Illuminate\Support\Stringable string(string $key, $default = null)
     * @see \Illuminate\Http\Request::session
     * @method static \Illuminate\Contracts\Session\Session session()
     * @see \Illuminate\Http\Request::prefetch
     * @method static bool prefetch()
     * @see \Symfony\Component\HttpFoundation\Request::getPayload
     * @method static \Symfony\Component\HttpFoundation\InputBag getPayload()
     * @see \Symfony\Component\HttpFoundation\Request::getMethod
     * @method static string getMethod()
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::expectsJson
     * @method static bool expectsJson()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flush
     * @method static void flush()
     * @see \Symfony\Component\HttpFoundation\Request::normalizeQueryString
     * @method static string normalizeQueryString(null|string $qs)
     * @see \Illuminate\Http\Request::root
     * @method static string root()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::missing
     * @method static bool missing(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::isFromTrustedProxy
     * @method static bool isFromTrustedProxy()
     * @see \Illuminate\Http\Request::json
     * @method static mixed|null|\Symfony\Component\HttpFoundation\InputBag json(null|string $key = null, $default = null)
     * @see \Illuminate\Http\Request::offsetExists
     * @method static bool offsetExists(string $offset)
     * @see \Symfony\Component\HttpFoundation\Request::getFormat
     * @method static null|string getFormat(null|string $mimeType)
     * @see \Symfony\Component\HttpFoundation\Request::getScriptName
     * @method static string getScriptName()
     * @see \Illuminate\Http\Request::fullUrlIs
     * @method static bool fullUrlIs(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes
     * @method static string[] getAcceptableContentTypes()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::allFiles
     * @method static array allFiles()
     * @see \Illuminate\Http\Request::createFrom
     * @method static \Illuminate\Http\Request createFrom(\Illuminate\Http\Request $from, \Illuminate\Http\Request|null $to = null)
     * @see \Illuminate\Http\Request::schemeAndHttpHost
     * @method static string schemeAndHttpHost()
     * @see \Illuminate\Http\Request::fullUrl
     * @method static string fullUrl()
     * @see \Symfony\Component\HttpFoundation\Request::setSessionFactory
     * @method static void setSessionFactory(callable $factory)
     * @see \Symfony\Component\HttpFoundation\Request::getEncodings
     * @method static string[] getEncodings()
     * @see \Symfony\Component\HttpFoundation\Request::overrideGlobals
     * @method static void overrideGlobals()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedHosts
     * @method static void setTrustedHosts(array $hostPatterns)
     * @see \Symfony\Component\HttpFoundation\Request::isMethodSafe
     * @method static bool isMethodSafe()
     * @see \Illuminate\Http\Request::fingerprint
     * @method static string fingerprint()
     * @see \Illuminate\Http\Request::method
     * @method static string method()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::cookie
     * @method static array|null|string cookie(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::ip
     * @method static null|string ip()
     * @see \Symfony\Component\HttpFoundation\Request::getContent
     * @method static false|null|resource|string getContent(bool $asResource = false)
     * @see \Illuminate\Http\Request::is
     * @method static bool is(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getUriForPath
     * @method static string getUriForPath(string $path)
     * @see \Illuminate\Http\Request::getRouteResolver
     * @method static \Closure getRouteResolver()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::enum
     * @method static mixed|null enum(string $key, $enumClass)
     * @see \Illuminate\Http\Request::offsetUnset
     * @method static void offsetUnset(string $offset)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHeaderSet
     * @method static int getTrustedHeaderSet()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredFormat
     * @method static null|string getPreferredFormat(null|string $default = 'html')
     * @see \Illuminate\Http\Concerns\InteractsWithInput::isNotFilled
     * @method static bool isNotFilled(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::server
     * @method static array|null|string server(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::setUserResolver
     * @method static \Illuminate\Http\Request setUserResolver(\Closure $callback)
     * @see \Symfony\Component\HttpFoundation\Request::getPort
     * @method static int|null|string getPort()
     * @see \Illuminate\Http\Request::setRouteResolver
     * @method static \Illuminate\Http\Request setRouteResolver(\Closure $callback)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenMissing
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenMissing(string $key, callable $callback, callable|null $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride
     * @method static bool getHttpMethodParameterOverride()
     * @see \Illuminate\Http\Request::segments
     * @method static array segments()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::file
     * @method static array|\Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|null file(null|string $key = null, $default = null)
     * @see \Illuminate\Http\Request::get
     * @method static mixed get(string $key, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getMimeTypes
     * @method static string[] getMimeTypes(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsJson
     * @method static bool acceptsJson()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenHas
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenHas(string $key, callable $callback, callable|null $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::prefers
     * @method static null|string prefers(array|string $contentTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasHeader
     * @method static bool hasHeader(string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::filled
     * @method static bool filled(array|string $key)
     * @see \Illuminate\Http\Request::url
     * @method static string url()
     * @see \Illuminate\Http\Request::setDefaultRequestLocale
     * @method static void setDefaultRequestLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::setMethod
     * @method static void setMethod(string $method)
     * @see \Symfony\Component\HttpFoundation\Request::getPassword
     * @method static null|string getPassword()
     * @see \Symfony\Component\HttpFoundation\Request::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::exists
     * @method static bool exists(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::date
     * @method static \Illuminate\Support\Carbon|null date(string $key, null|string $format = null, null|string $tz = null)
     * @see \Illuminate\Http\Request::instance
     * @method static \Illuminate\Http\Request instance()
     * @see \Symfony\Component\HttpFoundation\Request::getRelativeUriForPath
     * @method static string getRelativeUriForPath(string $path)
     * @see \Illuminate\Http\Request::pjax
     * @method static bool pjax()
     * @see \Illuminate\Http\Request::replace
     * @method static \Illuminate\Http\Request replace(array $input)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::integer
     * @method static int integer(string $key, int $default = 0)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::float
     * @method static float float(string $key, float $default = 0.0)
     * @see \Symfony\Component\HttpFoundation\Request::getRealMethod
     * @method static string getRealMethod()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredLanguage
     * @method static null|string getPreferredLanguage(array|null $locales = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::bearerToken
     * @method static null|string bearerToken()
     * @see \Symfony\Component\HttpFoundation\Request::getClientIps
     * @method static array|null[]|string[] getClientIps()
     * @see \Illuminate\Http\Request::host
     * @method static string host()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::only
     * @method static array only(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::create
     * @method static \Symfony\Component\HttpFoundation\Request create(string $uri, string $method = 'GET', array $parameters = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Symfony\Component\HttpFoundation\Request::getHttpHost
     * @method static string getHttpHost()
     * @see \Symfony\Component\HttpFoundation\Request::setFormat
     * @method static void setFormat(null|string $format, array|string $mimeTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::all
     * @method static array all(array|mixed|null $keys = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenFilled
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenFilled(string $key, callable $callback, callable|null $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setSession
     * @method static void setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session)
     * @see \Illuminate\Http\Request::routeIs
     * @method static bool routeIs(...$patterns)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::accepts
     * @method static bool accepts(array|string $contentTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::format
     * @method static string format(string $default = 'html')
     * @see \Illuminate\Http\Request::capture
     * @method static \Illuminate\Http\Request capture()
     * @see \Symfony\Component\HttpFoundation\Request::getClientIp
     * @method static null|string getClientIp()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasCookie
     * @method static bool hasCookie(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getUser
     * @method static null|string getUser()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::header
     * @method static array|null|string header(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::collect
     * @method static \Illuminate\Support\Collection collect(array|null|string $key = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::anyFilled
     * @method static bool anyFilled(array|string $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::keys
     * @method static array keys()
     * @see \Symfony\Component\HttpFoundation\Request::isNoCache
     * @method static bool isNoCache()
     * @see \Illuminate\Http\Request::offsetSet
     * @method static void offsetSet(string $offset, $value)
     * @see \Symfony\Component\HttpFoundation\Request::getMimeType
     * @method static null|string getMimeType(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashExcept
     * @method static void flashExcept(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsAnyContentType
     * @method static bool acceptsAnyContentType()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::dump
     * @method static \Illuminate\Http\Concerns\InteractsWithInput dump($keys = [])
     * @see \Symfony\Component\HttpFoundation\Request::getUri
     * @method static string getUri()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Symfony\Component\HttpFoundation\Request::isSecure
     * @method static bool isSecure()
     * @see \Illuminate\Http\Request::fullUrlWithQuery
     * @method static string fullUrlWithQuery(array $query)
     * @see \Symfony\Component\HttpFoundation\Request::getScheme
     * @method static string getScheme()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::boolean
     * @method static bool boolean(null|string $key = null, bool $default = false)
     * @see \Illuminate\Http\Request::setLaravelSession
     * @method static void setLaravelSession(\Illuminate\Contracts\Session\Session $session)
     * @see \Symfony\Component\HttpFoundation\Request::getRequestUri
     * @method static string getRequestUri()
     * @see \Illuminate\Http\Request::toArray
     * @method static array toArray()
     * @see \Illuminate\Http\Request::user
     * @method static mixed user(null|string $guard = null)
     * @see \Symfony\Component\HttpFoundation\Request::getLanguages
     * @method static string[] getLanguages()
     */
    class Request {}

    /**
     * @see \Illuminate\Routing\ResponseFactory::streamDownload
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse streamDownload(callable $callback, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\ResponseFactory::jsonp
     * @method static \Illuminate\Http\JsonResponse jsonp(string $callback, $data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Routing\ResponseFactory::redirectTo
     * @method static \Illuminate\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\ResponseFactory::redirectGuest
     * @method static \Illuminate\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\ResponseFactory::redirectToIntended
     * @method static \Illuminate\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\ResponseFactory::download
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Routing\ResponseFactory::view
     * @method static \Illuminate\Http\Response view(array|string $view, array $data = [], int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\ResponseFactory::file
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse file(\SplFileInfo|string $file, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\ResponseFactory::stream
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse stream(callable $callback, int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\ResponseFactory::noContent
     * @method static \Illuminate\Http\Response noContent(int $status = 204, array $headers = [])
     * @see \Illuminate\Routing\ResponseFactory::json
     * @method static \Illuminate\Http\JsonResponse json($data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Routing\ResponseFactory::streamJson
     * @method static \Symfony\Component\HttpFoundation\StreamedJsonResponse streamJson(array $data, int $status = 200, array $headers = [], int $encodingOptions = JsonResponse::DEFAULT_ENCODING_OPTIONS)
     * @see \Illuminate\Routing\ResponseFactory::redirectToRoute
     * @method static \Illuminate\Http\RedirectResponse redirectToRoute(string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\ResponseFactory::make
     * @method static \Illuminate\Http\Response make($content = '', int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\ResponseFactory::redirectToAction
     * @method static \Illuminate\Http\RedirectResponse redirectToAction(array|string $action, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Response {}

    /**
     * @see \Illuminate\Routing\RouteRegistrar::scopeBindings
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @see \Illuminate\Routing\Router::apiResources
     * @method static void apiResources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::getLastGroupPrefix
     * @method static string getLastGroupPrefix()
     * @see \Illuminate\Routing\Router::substituteBindings
     * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::put
     * @method static \Illuminate\Routing\Route put(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::permanentRedirect
     * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereIn
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereIn(array|string $parameters, array $values)
     * @see \Illuminate\Routing\Router::patch
     * @method static \Illuminate\Routing\Route patch(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::bind
     * @method static void bind(string $key, callable|string $binder)
     * @see \Illuminate\Routing\Router::toResponse
     * @method static \Symfony\Component\HttpFoundation\Response toResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::options
     * @method static \Illuminate\Routing\Route options(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::model
     * @method static void model(string $key, string $class, \Closure|null $callback = null)
     * @see \Illuminate\Routing\Router::removeMiddlewareFromGroup
     * @method static \Illuminate\Routing\Router removeMiddlewareFromGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::hasMiddlewareGroup
     * @method static bool hasMiddlewareGroup(string $name)
     * @see \Illuminate\Routing\Router::prependMiddlewareToGroup
     * @method static \Illuminate\Routing\Router prependMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::addRoute
     * @method static \Illuminate\Routing\Route addRoute(array|string $methods, string $uri, array|callable|null|string $action)
     * @see \Illuminate\Routing\Router::aliasMiddleware
     * @method static \Illuminate\Routing\Router aliasMiddleware(string $name, string $class)
     * @see \Illuminate\Routing\Router::is
     * @method static bool is(...$patterns)
     * @see \Illuminate\Routing\Router::input
     * @method static mixed input(string $key, null|string $default = null)
     * @see \Illuminate\Routing\RouteRegistrar::as
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereUlid
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereUlid(array|string $parameters)
     * @see \Illuminate\Routing\RouteRegistrar::withoutScopedBindings
     * @method static \Illuminate\Routing\RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\RouteRegistrar::domain
     * @method static \Illuminate\Routing\RouteRegistrar domain(\BackedEnum|string $value)
     * @see \Illuminate\Routing\Router::matched
     * @method static void matched(callable|string $callback)
     * @see \Illuminate\Routing\Router::currentRouteUses
     * @method static bool currentRouteUses(string $action)
     * @see \Illuminate\Routing\Router::resourceVerbs
     * @method static array|null resourceVerbs(array $verbs = [])
     * @see \Illuminate\Routing\Router::singularResourceParameters
     * @method static void singularResourceParameters(bool $singular = true)
     * @see \Illuminate\Routing\Router::pattern
     * @method static void pattern(string $key, string $pattern)
     * @see \Illuminate\Routing\Router::substituteImplicitBindings
     * @method static void substituteImplicitBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::singletons
     * @method static void singletons(array $singletons, array $options = [])
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereUuid
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereUuid(array|string $parameters)
     * @see \Illuminate\Routing\Router::current
     * @method static \Illuminate\Routing\Route|null current()
     * @see \Illuminate\Routing\Router::hasGroupStack
     * @method static bool hasGroupStack()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Router::get
     * @method static \Illuminate\Routing\Route get(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::gatherRouteMiddleware
     * @method static array gatherRouteMiddleware(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereAlphaNumeric
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereAlphaNumeric(array|string $parameters)
     * @see \Illuminate\Routing\Router::apiSingleton
     * @method static \Illuminate\Routing\PendingSingletonResourceRegistration apiSingleton(string $name, string $controller, array $options = [])
     * @see \Illuminate\Routing\RouteRegistrar::where
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @see \Illuminate\Routing\Router::uniqueMiddleware
     * @method static array uniqueMiddleware(array $middleware)
     * @see \Illuminate\Routing\RouteRegistrar::attribute
     * @method static \Illuminate\Routing\RouteRegistrar attribute(string $key, $value)
     * @see \Illuminate\Routing\Router::redirect
     * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
     * @see \Illuminate\Routing\RouteRegistrar::controller
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @see \Illuminate\Routing\Router::middlewareGroup
     * @method static \Illuminate\Routing\Router middlewareGroup(string $name, array $middleware)
     * @see \Illuminate\Routing\RouteRegistrar::withoutMiddleware
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @see \Illuminate\Routing\Router::currentRouteNamed
     * @method static bool currentRouteNamed(...$patterns)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereNumber
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereNumber(array|string $parameters)
     * @see \Illuminate\Routing\Router::getCurrentRequest
     * @method static \Illuminate\Http\Request getCurrentRequest()
     * @see \Illuminate\Routing\Router::prepareResponse
     * @method static \Symfony\Component\HttpFoundation\Response prepareResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::getCurrentRoute
     * @method static \Illuminate\Routing\Route|null getCurrentRoute()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Routing\Router::getPatterns
     * @method static array getPatterns()
     * @see \Illuminate\Routing\Router::currentRouteName
     * @method static null|string currentRouteName()
     * @see \Illuminate\Routing\Router::dispatch
     * @method static \Symfony\Component\HttpFoundation\Response dispatch(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::getCourant
     * @method static null|string getCourant()
     * @see \Illuminate\Routing\Router::newRoute
     * @method static \Illuminate\Routing\Route newRoute(array|string $methods, string $uri, $action)
     * @see \Illuminate\Routing\Router::setContainer
     * @method static \Illuminate\Routing\Router setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Routing\Router::view
     * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [], array|int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\Router::post
     * @method static \Illuminate\Routing\Route post(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::has
     * @method static bool has(array|string $name)
     * @see \Illuminate\Routing\Router::group
     * @method static \Illuminate\Routing\Router group(array $attributes, array|string $routes)
     * @see \Illuminate\Routing\Router::currentRouteAction
     * @method static null|string currentRouteAction()
     * @see \Illuminate\Support\Traits\Tappable::tap
     * @method static \Illuminate\Support\HigherOrderTapProxy|\Illuminate\Support\Traits\Tappable|mixed tap($callback = null)
     * @see \Illuminate\Routing\Router::getBindingCallback
     * @method static \Closure|null getBindingCallback(string $key)
     * @see \Illuminate\Routing\Router::resource
     * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Routing\Router::pushMiddlewareToGroup
     * @method static \Illuminate\Routing\Router pushMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::patterns
     * @method static void patterns(array $patterns)
     * @see \Illuminate\Routing\Router::respondWithRoute
     * @method static \Symfony\Component\HttpFoundation\Response respondWithRoute(string $name)
     * @see \Illuminate\Routing\Router::getMiddlewareGroups
     * @method static array getMiddlewareGroups()
     * @see \Illuminate\Routing\Router::dispatchToRoute
     * @method static \Symfony\Component\HttpFoundation\Response dispatchToRoute(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::getRoutes
     * @method static \Illuminate\Routing\RouteCollection|\Illuminate\Routing\RouteCollectionInterface getRoutes()
     * @see \Illuminate\Routing\Router::apiResource
     * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\RouteRegistrar::name
     * @method static \Illuminate\Routing\RouteRegistrar name(\BackedEnum|string $value)
     * @see \Illuminate\Routing\Router::fallback
     * @method static \Illuminate\Routing\Route fallback(array|callable|null|string $action)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\Router::getGroupStack
     * @method static array getGroupStack()
     * @see \Illuminate\Routing\Router::apiSingletons
     * @method static void apiSingletons(array $singletons, array $options = [])
     * @see \Illuminate\Routing\Router::delete
     * @method static \Illuminate\Routing\Route delete(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::flushMiddlewareGroups
     * @method static \Illuminate\Routing\Router flushMiddlewareGroups()
     * @see \Illuminate\Routing\Router::setCompiledRoutes
     * @method static void setCompiledRoutes(array $routes)
     * @see \Illuminate\Routing\Router::getMiddleware
     * @method static array getMiddleware()
     * @see \Illuminate\Routing\Router::resourceParameters
     * @method static void resourceParameters(array $parameters = [])
     * @see \Illuminate\Routing\RouteRegistrar::missing
     * @method static \Illuminate\Routing\RouteRegistrar missing(\Closure $missing)
     * @see \Illuminate\Routing\Router::substituteImplicitBindingsUsing
     * @method static \Illuminate\Routing\Router substituteImplicitBindingsUsing(callable $callback)
     * @see \Illuminate\Routing\RouteRegistrar::middleware
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|null|string $middleware)
     * @see \Illuminate\Routing\Router::mergeWithLastGroup
     * @method static array mergeWithLastGroup(array $new, bool $prependExistingPrefix = true)
     * @see \Illuminate\Routing\Router::singleton
     * @method static \Illuminate\Routing\PendingSingletonResourceRegistration singleton(string $name, string $controller, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Router::resolveMiddleware
     * @method static array resolveMiddleware(array $middleware, array $excluded = [])
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereAlpha
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereAlpha(array|string $parameters)
     * @see \Illuminate\Routing\Router::match
     * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::resources
     * @method static void resources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::any
     * @method static \Illuminate\Routing\Route any(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::setRoutes
     * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes)
     * @see \Illuminate\Routing\RouteRegistrar::namespace
     * @method static \Illuminate\Routing\RouteRegistrar namespace(null|string $value)
     * @see \Illuminate\Routing\Router::uses
     * @method static bool uses(...$patterns)
     */
    class Route {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Console\Scheduling\Schedule::useCache
     * @method static \Illuminate\Console\Scheduling\Schedule useCache(string $store)
     * @see \Illuminate\Console\Scheduling\Schedule::command
     * @method static \Illuminate\Console\Scheduling\Event command(string $command, array $parameters = [])
     * @see \Illuminate\Console\Scheduling\Schedule::dueEvents
     * @method static \Illuminate\Support\Collection dueEvents(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Console\Scheduling\Schedule::call
     * @method static \Illuminate\Console\Scheduling\CallbackEvent call(callable|string $callback, array $parameters = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Console\Scheduling\Schedule::compileArrayInput
     * @method static string compileArrayInput(int|string $key, array $value)
     * @see \Illuminate\Console\Scheduling\Schedule::serverShouldRun
     * @method static bool serverShouldRun(\Illuminate\Console\Scheduling\Event $event, \DateTimeInterface $time)
     * @see \Illuminate\Console\Scheduling\Schedule::job
     * @method static \Illuminate\Console\Scheduling\CallbackEvent job(object|string $job, null|string $queue = null, null|string $connection = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Console\Scheduling\Schedule::exec
     * @method static \Illuminate\Console\Scheduling\Event exec(string $command, array $parameters = [])
     * @see \Illuminate\Console\Scheduling\Schedule::events
     * @method static \Illuminate\Console\Scheduling\Event[] events()
     */
    class Schedule {}

    /**
     * @see \Illuminate\Database\Schema\Builder::disableForeignKeyConstraints
     * @method static bool disableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::drop
     * @method static void drop(string $table)
     * @see \Illuminate\Database\Schema\Builder::getIndexes
     * @method static array getIndexes(string $table)
     * @see \Illuminate\Database\Schema\Builder::hasColumns
     * @method static bool hasColumns(string $table, array $columns)
     * @see \Illuminate\Database\Schema\Builder::getConnection
     * @method static \Illuminate\Database\Connection getConnection()
     * @see \Illuminate\Database\Schema\Builder::getViews
     * @method static array getViews()
     * @see \Illuminate\Database\Schema\Builder::whenTableDoesntHaveColumn
     * @method static void whenTableDoesntHaveColumn(string $table, string $column, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::morphUsingUlids
     * @method static void morphUsingUlids()
     * @see \Illuminate\Database\Schema\Builder::morphUsingUuids
     * @method static void morphUsingUuids()
     * @see \Illuminate\Database\Schema\Builder::whenTableHasColumn
     * @method static void whenTableHasColumn(string $table, string $column, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::enableForeignKeyConstraints
     * @method static bool enableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::getTables
     * @method static array getTables()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Database\Schema\Builder::blueprintResolver
     * @method static void blueprintResolver(\Closure $resolver)
     * @see \Illuminate\Database\Schema\Builder::defaultStringLength
     * @method static void defaultStringLength(int $length)
     * @see \Illuminate\Database\Schema\Builder::getIndexListing
     * @method static array getIndexListing(string $table)
     * @see \Illuminate\Database\Schema\Builder::hasIndex
     * @method static bool hasIndex(string $table, array|string $index, null|string $type = null)
     * @see \Illuminate\Database\Schema\Builder::getForeignKeys
     * @method static array getForeignKeys(string $table)
     * @see \Illuminate\Database\Schema\Builder::setConnection
     * @method static \Illuminate\Database\Schema\Builder setConnection(\Illuminate\Database\Connection $connection)
     * @see \Illuminate\Database\Schema\Builder::getTypes
     * @method static array getTypes()
     * @see \Illuminate\Database\Schema\Builder::getColumnType
     * @method static string getColumnType(string $table, string $column, bool $fullDefinition = false)
     * @see \Illuminate\Database\Schema\Builder::create
     * @method static void create(string $table, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::dropColumns
     * @method static void dropColumns(string $table, array|string $columns)
     * @see \Illuminate\Database\Schema\Builder::table
     * @method static void table(string $table, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Schema\Builder::getColumnListing
     * @method static array getColumnListing(string $table)
     * @see \Illuminate\Database\Schema\Builder::hasView
     * @method static bool hasView(string $view)
     * @see \Illuminate\Database\Schema\Builder::dropIfExists
     * @method static void dropIfExists(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropDatabaseIfExists
     * @method static bool dropDatabaseIfExists(string $name)
     * @see \Illuminate\Database\Schema\Builder::dropAllTables
     * @method static void dropAllTables()
     * @see \Illuminate\Database\Schema\Builder::dropAllViews
     * @method static void dropAllViews()
     * @see \Illuminate\Database\Schema\Builder::hasTable
     * @method static bool hasTable(string $table)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Schema\Builder::defaultMorphKeyType
     * @method static void defaultMorphKeyType(string $type)
     * @see \Illuminate\Database\Schema\Builder::getTableListing
     * @method static array getTableListing()
     * @see \Illuminate\Database\Schema\Builder::rename
     * @method static void rename(string $from, string $to)
     * @see \Illuminate\Database\Schema\Builder::getColumns
     * @method static array getColumns(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropAllTypes
     * @method static void dropAllTypes()
     * @see \Illuminate\Database\Schema\Builder::withoutForeignKeyConstraints
     * @method static mixed withoutForeignKeyConstraints(\Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::hasColumn
     * @method static bool hasColumn(string $table, string $column)
     * @see \Illuminate\Database\Schema\Builder::createDatabase
     * @method static bool createDatabase(string $name)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Schema {}

    /**
     * @see \Illuminate\Session\Store::regenerateToken
     * @method static void regenerateToken()
     * @see \Illuminate\Session\SessionManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Session\Store::handlerNeedsRequest
     * @method static bool handlerNeedsRequest()
     * @see \Illuminate\Session\Store::replace
     * @method static void replace(array $attributes)
     * @see \Illuminate\Session\Store::ageFlashData
     * @method static void ageFlashData()
     * @see \Illuminate\Session\Store::flashInput
     * @method static void flashInput(array $value)
     * @see \Illuminate\Session\Store::setRequestOnHandler
     * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
     * @see \Illuminate\Session\Store::put
     * @method static void put(array|string $key, $value = null)
     * @see \Illuminate\Session\SessionManager::getSessionConfig
     * @method static array getSessionConfig()
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Session\Store::previousUrl
     * @method static null|string previousUrl()
     * @see \Illuminate\Session\Store::hasAny
     * @method static bool hasAny(array|string $key)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Session\Store::only
     * @method static array only(array $keys)
     * @see \Illuminate\Session\Store::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Session\Store::id
     * @method static string id()
     * @see \Illuminate\Session\Store::all
     * @method static array all()
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Session\Store::setPreviousUrl
     * @method static void setPreviousUrl(string $url)
     * @see \Illuminate\Session\Store::getId
     * @method static string getId()
     * @see \Illuminate\Session\Store::isValidId
     * @method static bool isValidId(null|string $id)
     * @see \Illuminate\Session\Store::push
     * @method static void push(string $key, $value)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Session\Store::setName
     * @method static void setName(string $name)
     * @see \Illuminate\Session\Store::forget
     * @method static void forget(array|string $keys)
     * @see \Illuminate\Session\Store::reflash
     * @method static void reflash()
     * @see \Illuminate\Session\SessionManager::defaultRouteBlockLockSeconds
     * @method static int defaultRouteBlockLockSeconds()
     * @see \Illuminate\Session\Store::setExists
     * @method static void setExists(bool $value)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Session\Store::isStarted
     * @method static bool isStarted()
     * @see \Illuminate\Session\Store::regenerate
     * @method static bool regenerate(bool $destroy = false)
     * @see \Illuminate\Session\Store::keep
     * @method static void keep(array|mixed $keys = null)
     * @see \Illuminate\Session\Store::getOldInput
     * @method static mixed getOldInput(null|string $key = null, $default = null)
     * @see \Illuminate\Session\Store::except
     * @method static array except(array $keys)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Session\SessionManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Session\SessionManager::shouldBlock
     * @method static bool shouldBlock()
     * @see \Illuminate\Session\Store::migrate
     * @method static bool migrate(bool $destroy = false)
     * @see \Illuminate\Session\Store::flash
     * @method static void flash(string $key, $value = true)
     * @see \Illuminate\Session\Store::hasOldInput
     * @method static bool hasOldInput(null|string $key = null)
     * @see \Illuminate\Session\Store::save
     * @method static void save()
     * @see \Illuminate\Session\Store::increment
     * @method static int|mixed increment(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::remove
     * @method static mixed remove(string $key)
     * @see \Illuminate\Session\Store::remember
     * @method static mixed remember(string $key, \Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Session\SessionManager::defaultRouteBlockWaitSeconds
     * @method static int defaultRouteBlockWaitSeconds()
     * @see \Illuminate\Session\Store::flush
     * @method static void flush()
     * @see \Illuminate\Session\Store::now
     * @method static void now(string $key, $value)
     * @see \Illuminate\Session\Store::get
     * @method static mixed get(string $key, $default = null)
     * @see \Illuminate\Session\Store::missing
     * @method static bool missing(array|string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Session\Store::start
     * @method static bool start()
     * @see \Illuminate\Session\SessionManager::blockDriver
     * @method static null|string blockDriver()
     * @see \Illuminate\Session\Store::getHandler
     * @method static \SessionHandlerInterface getHandler()
     * @see \Illuminate\Session\Store::invalidate
     * @method static bool invalidate()
     * @see \Illuminate\Session\Store::token
     * @method static string token()
     * @see \Illuminate\Session\Store::getName
     * @method static string getName()
     * @see \Illuminate\Session\Store::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Session\Store::passwordConfirmed
     * @method static void passwordConfirmed()
     * @see \Illuminate\Session\Store::decrement
     * @method static int decrement(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::exists
     * @method static bool exists(array|string $key)
     * @see \Illuminate\Session\Store::setHandler
     * @method static \SessionHandlerInterface setHandler(\SessionHandlerInterface $handler)
     * @see \Illuminate\Session\Store::setId
     * @method static void setId(null|string $id)
     */
    class Session {}

    /**
     * @see \Illuminate\Filesystem\FilesystemManager::createS3Driver
     * @method static \Illuminate\Contracts\Filesystem\Cloud|\Illuminate\Filesystem\AwsS3V3Adapter createS3Driver(array $config)
     * @see \Illuminate\Filesystem\FilesystemAdapter::providesTemporaryUrls
     * @method static bool providesTemporaryUrls()
     * @see \Illuminate\Filesystem\FilesystemAdapter::prepend
     * @method static bool|string prepend(string $path, string $data, string $separator = PHP_EOL)
     * @see \Illuminate\Filesystem\FilesystemAdapter::assertMissing
     * @method static \Illuminate\Filesystem\FilesystemAdapter assertMissing(array|string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::assertDirectoryEmpty
     * @method static \Illuminate\Filesystem\FilesystemAdapter assertDirectoryEmpty(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::buildTemporaryUrlsUsing
     * @method static void buildTemporaryUrlsUsing(\Closure $callback)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable|mixed when($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Filesystem\FilesystemAdapter::put
     * @method static bool|string put(string $path, \Illuminate\Http\File|\Illuminate\Http\UploadedFile|\Psr\Http\Message\StreamInterface|resource|string $contents, $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::cloud
     * @method static \Illuminate\Contracts\Filesystem\Cloud|\Illuminate\Contracts\Filesystem\Filesystem cloud()
     * @see \Illuminate\Filesystem\FilesystemAdapter::path
     * @method static string path(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::download
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse download(string $path, null|string $name = null, array $headers = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::fileExists
     * @method static bool fileExists(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::directoryMissing
     * @method static bool directoryMissing(string $path)
     * @see \League\Flysystem\FilesystemReader::has
     * @method static bool has(string $location)
     * @see \League\Flysystem\FilesystemWriter::write
     * @method static void write(string $location, string $contents, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver
     * @method static string getDefaultCloudDriver()
     * @see \League\Flysystem\FilesystemReader::read
     * @method static string read(string $location)
     * @see \League\Flysystem\FilesystemReader::visibility
     * @method static string visibility(string $path)
     * @see \League\Flysystem\FilesystemWriter::createDirectory
     * @method static void createDirectory(string $location, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemManager::extend
     * @method static \Illuminate\Filesystem\FilesystemManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Filesystem\FilesystemAdapter::getDriver
     * @method static \League\Flysystem\FilesystemOperator getDriver()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Filesystem\FilesystemManager::disk
     * @method static \Illuminate\Contracts\Filesystem\Filesystem disk(null|string $name = null)
     * @see \Illuminate\Filesystem\FilesystemAdapter::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::directoryExists
     * @method static bool directoryExists(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::getAdapter
     * @method static \League\Flysystem\FilesystemAdapter getAdapter()
     * @see \Illuminate\Filesystem\FilesystemAdapter::files
     * @method static array files(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Filesystem\FilesystemManager::drive
     * @method static \Illuminate\Contracts\Filesystem\Filesystem drive(null|string $name = null)
     * @see \Illuminate\Filesystem\FilesystemAdapter::setVisibility
     * @method static bool setVisibility(string $path, string $visibility)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Filesystem\FilesystemManager::forgetDisk
     * @method static \Illuminate\Filesystem\FilesystemManager forgetDisk(array|string $disk)
     * @see \Illuminate\Filesystem\FilesystemAdapter::putFileAs
     * @method static false|string putFileAs(\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path, array|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|null|string $file, array|null|string $name = null, $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::purge
     * @method static void purge(null|string $name = null)
     * @see \League\Flysystem\FilesystemReader::fileSize
     * @method static int fileSize(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::getVisibility
     * @method static string getVisibility(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Filesystem\FilesystemManager::createFtpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createFtpDriver(array $config)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable|mixed unless($value = null, callable|null $callback = null, callable|null $default = null)
     * @see \League\Flysystem\FilesystemReader::listContents
     * @method static \League\Flysystem\DirectoryListing listContents(string $location, bool $deep = self::LIST_SHALLOW)
     * @see \Illuminate\Filesystem\FilesystemAdapter::writeStream
     * @method static bool writeStream($path, $resource, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::setApplication
     * @method static \Illuminate\Filesystem\FilesystemManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Filesystem\FilesystemManager::createLocalDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createLocalDriver(array $config)
     * @see \Illuminate\Filesystem\FilesystemAdapter::fileMissing
     * @method static bool fileMissing(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::checksum
     * @method static false|string checksum(string $path, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::missing
     * @method static bool missing(string $path)
     * @see \League\Flysystem\FilesystemReader::publicUrl
     * @method static string publicUrl(string $path, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::directories
     * @method static array directories(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Filesystem\FilesystemAdapter::json
     * @method static array|null json(string $path, int $flags = 0)
     * @see \Illuminate\Filesystem\FilesystemAdapter::allDirectories
     * @method static array allDirectories(null|string $directory = null)
     * @see \Illuminate\Filesystem\FilesystemAdapter::copy
     * @method static bool copy(string $from, string $to)
     * @see \Illuminate\Filesystem\FilesystemAdapter::readStream
     * @method static null|resource readStream($path)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Filesystem\FilesystemAdapter::move
     * @method static bool move(string $from, string $to)
     * @see \Illuminate\Filesystem\FilesystemManager::set
     * @method static \Illuminate\Filesystem\FilesystemManager set(string $name, $disk)
     * @see \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl
     * @method static string temporaryUrl(string $path, \DateTimeInterface $expiration, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::temporaryUploadUrl
     * @method static array temporaryUploadUrl(string $path, \DateTimeInterface $expiration, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::assertExists
     * @method static \Illuminate\Filesystem\FilesystemAdapter assertExists(array|string $path, null|string $content = null)
     * @see \Illuminate\Filesystem\FilesystemManager::createSftpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createSftpDriver(array $config)
     * @see \Illuminate\Filesystem\FilesystemManager::createScopedDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem createScopedDriver(array $config)
     * @see \Illuminate\Filesystem\FilesystemAdapter::url
     * @method static string url(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory
     * @method static bool deleteDirectory(string $directory)
     * @see \Illuminate\Filesystem\FilesystemManager::build
     * @method static \Illuminate\Contracts\Filesystem\Filesystem build(array|string $config)
     * @see \Illuminate\Filesystem\FilesystemAdapter::makeDirectory
     * @method static bool makeDirectory(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::response
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse response(string $path, null|string $name = null, array $headers = [], null|string $disposition = 'inline')
     * @see \Illuminate\Filesystem\FilesystemAdapter::putFile
     * @method static false|string putFile(\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path, array|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|null|string $file = null, $options = [])
     * @see \Illuminate\Filesystem\FilesystemAdapter::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::mimeType
     * @method static false|string mimeType(string $path)
     * @see \Illuminate\Filesystem\FilesystemAdapter::allFiles
     * @method static array allFiles(null|string $directory = null)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Filesystem\FilesystemAdapter::append
     * @method static bool|string append(string $path, string $data, string $separator = PHP_EOL)
     */
    class Storage {}

    /**
     * @see \Illuminate\Routing\UrlGenerator::formatRoot
     * @method static string formatRoot(string $scheme, null|string $root = null)
     * @see \Illuminate\Routing\UrlGenerator::secure
     * @method static string secure(string $path, array $parameters = [])
     * @see \Illuminate\Routing\UrlGenerator::formatScheme
     * @method static null|string formatScheme(bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::signatureHasNotExpired
     * @method static bool signatureHasNotExpired(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::toRoute
     * @method static string toRoute(\Illuminate\Routing\Route $route, $parameters, bool $absolute)
     * @see \Illuminate\Routing\UrlGenerator::action
     * @method static string action(array|string $action, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::getRequest
     * @method static \Illuminate\Http\Request getRequest()
     * @see \Illuminate\Routing\UrlGenerator::setKeyResolver
     * @method static \Illuminate\Routing\UrlGenerator setKeyResolver(callable $keyResolver)
     * @see \Illuminate\Routing\UrlGenerator::query
     * @method static string query(string $path, array $query = [], $extra = [], bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::format
     * @method static string format(string $root, string $path, \Illuminate\Routing\Route|null $route = null)
     * @see \Illuminate\Routing\UrlGenerator::hasValidRelativeSignature
     * @method static bool hasValidRelativeSignature(\Illuminate\Http\Request $request, array $ignoreQuery = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\UrlGenerator::formatHostUsing
     * @method static \Illuminate\Routing\UrlGenerator formatHostUsing(\Closure $callback)
     * @see \Illuminate\Routing\UrlGenerator::route
     * @method static string route(\BackedEnum|string $name, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::forceRootUrl
     * @method static void forceRootUrl(null|string $root)
     * @see \Illuminate\Routing\UrlGenerator::defaults
     * @method static void defaults(array $defaults)
     * @see \Illuminate\Routing\UrlGenerator::formatParameters
     * @method static array formatParameters(array|mixed $parameters)
     * @see \Illuminate\Routing\UrlGenerator::signedRoute
     * @method static string signedRoute(\BackedEnum|string $name, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::setRequest
     * @method static void setRequest(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::isValidUrl
     * @method static bool isValidUrl(string $path)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\UrlGenerator::full
     * @method static string full()
     * @see \Illuminate\Routing\UrlGenerator::resolveMissingNamedRoutesUsing
     * @method static \Illuminate\Routing\UrlGenerator resolveMissingNamedRoutesUsing(callable $missingNamedRouteResolver)
     * @see \Illuminate\Routing\UrlGenerator::getDefaultParameters
     * @method static array getDefaultParameters()
     * @see \Illuminate\Routing\UrlGenerator::withKeyResolver
     * @method static \Illuminate\Routing\UrlGenerator withKeyResolver(callable $keyResolver)
     * @see \Illuminate\Routing\UrlGenerator::pathFormatter
     * @method static \Closure pathFormatter()
     * @see \Illuminate\Routing\UrlGenerator::current
     * @method static string current()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\UrlGenerator::getRootControllerNamespace
     * @method static string getRootControllerNamespace()
     * @see \Illuminate\Routing\UrlGenerator::temporarySignedRoute
     * @method static string temporarySignedRoute(\BackedEnum|string $name, \DateInterval|\DateTimeInterface|int $expiration, array $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::secureAsset
     * @method static string secureAsset(string $path)
     * @see \Illuminate\Routing\UrlGenerator::formatPathUsing
     * @method static \Illuminate\Routing\UrlGenerator formatPathUsing(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\UrlGenerator::previous
     * @method static string previous($fallback = false)
     * @see \Illuminate\Routing\UrlGenerator::hasCorrectSignature
     * @method static bool hasCorrectSignature(\Illuminate\Http\Request $request, bool $absolute = true, array $ignoreQuery = [])
     * @see \Illuminate\Routing\UrlGenerator::forceScheme
     * @method static void forceScheme(null|string $scheme)
     * @see \Illuminate\Routing\UrlGenerator::setSessionResolver
     * @method static \Illuminate\Routing\UrlGenerator setSessionResolver(callable $sessionResolver)
     * @see \Illuminate\Routing\UrlGenerator::setRoutes
     * @method static \Illuminate\Routing\UrlGenerator setRoutes(\Illuminate\Routing\RouteCollectionInterface $routes)
     * @see \Illuminate\Routing\UrlGenerator::previousPath
     * @method static string previousPath($fallback = false)
     * @see \Illuminate\Routing\UrlGenerator::hasValidSignature
     * @method static bool hasValidSignature(\Illuminate\Http\Request $request, bool $absolute = true, array $ignoreQuery = [])
     * @see \Illuminate\Routing\UrlGenerator::assetFrom
     * @method static string assetFrom(string $root, string $path, bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::setRootControllerNamespace
     * @method static \Illuminate\Routing\UrlGenerator setRootControllerNamespace(string $rootNamespace)
     * @see \Illuminate\Routing\UrlGenerator::to
     * @method static string to(string $path, $extra = [], bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::asset
     * @method static string asset(string $path, bool|null $secure = null)
     */
    class URL {}

    /**
     * @see \Illuminate\Validation\Factory::resolver
     * @method static void resolver(\Closure $resolver)
     * @see \Illuminate\Validation\Factory::setPresenceVerifier
     * @method static void setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)
     * @see \Illuminate\Validation\Factory::replacer
     * @method static void replacer(string $rule, string $replacer)
     * @see \Illuminate\Validation\Factory::extendImplicit
     * @method static void extendImplicit(string $rule, string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::setContainer
     * @method static \Illuminate\Validation\Factory setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Validation\Factory::extend
     * @method static void extend(string $rule, string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::extendDependent
     * @method static void extendDependent(string $rule, string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::includeUnvalidatedArrayKeys
     * @method static void includeUnvalidatedArrayKeys()
     * @see \Illuminate\Validation\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container|null getContainer()
     * @see \Illuminate\Validation\Factory::getTranslator
     * @method static \Illuminate\Contracts\Translation\Translator getTranslator()
     * @see \Illuminate\Validation\Factory::excludeUnvalidatedArrayKeys
     * @method static void excludeUnvalidatedArrayKeys()
     * @see \Illuminate\Validation\Factory::make
     * @method static \Illuminate\Validation\Validator make(array $data, array $rules, array $messages = [], array $attributes = [])
     * @see \Illuminate\Validation\Factory::getPresenceVerifier
     * @method static \Illuminate\Validation\PresenceVerifierInterface getPresenceVerifier()
     * @see \Illuminate\Validation\Factory::validate
     * @method static array validate(array $data, array $rules, array $messages = [], array $attributes = [])
     */
    class Validator {}

    /**
     * @see \Illuminate\View\Concerns\ManagesLayouts::stopSection
     * @method static string stopSection(bool $overwrite = false)
     * @see \Illuminate\View\Concerns\ManagesFragments::getFragment
     * @method static mixed|null|string getFragment(string $name, null|string $default = null)
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSections
     * @method static array getSections()
     * @see \Illuminate\View\Concerns\ManagesEvents::callComposer
     * @method static void callComposer(\Illuminate\Contracts\View\View $view)
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldContent
     * @method static string yieldContent(string $section, string $default = '')
     * @see \Illuminate\View\Concerns\ManagesTranslations::startTranslation
     * @method static void startTranslation(array $replacements = [])
     * @see \Illuminate\View\Concerns\ManagesLayouts::sectionMissing
     * @method static bool sectionMissing(string $name)
     * @see \Illuminate\View\Factory::replaceNamespace
     * @method static \Illuminate\View\Factory replaceNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesComponents::endSlot
     * @method static void endSlot()
     * @see \Illuminate\View\Factory::addNamespace
     * @method static \Illuminate\View\Factory addNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponent
     * @method static void startComponent(\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string $view, array $data = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::startPrepend
     * @method static void startPrepend(string $section, string $content = '')
     * @see \Illuminate\View\Factory::renderUnless
     * @method static string renderUnless(bool $condition, string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::flushStacks
     * @method static void flushStacks()
     * @see \Illuminate\View\Factory::addLocation
     * @method static void addLocation(string $location)
     * @see \Illuminate\View\Factory::incrementRender
     * @method static void incrementRender()
     * @see \Illuminate\View\Factory::flushFinderCache
     * @method static void flushFinderCache()
     * @see \Illuminate\View\Factory::decrementRender
     * @method static void decrementRender()
     * @see \Illuminate\View\Factory::getEngineFromPath
     * @method static \Illuminate\Contracts\View\Engine getEngineFromPath(string $path)
     * @see \Illuminate\View\Concerns\ManagesLoops::getLoopStack
     * @method static array getLoopStack()
     * @see \Illuminate\View\Concerns\ManagesFragments::getFragments
     * @method static array getFragments()
     * @see \Illuminate\View\Factory::shared
     * @method static mixed shared(string $key, $default = null)
     * @see \Illuminate\View\Concerns\ManagesComponents::renderComponent
     * @method static string renderComponent()
     * @see \Illuminate\View\Factory::hasRenderedOnce
     * @method static bool hasRenderedOnce(string $id)
     * @see \Illuminate\View\Factory::getFinder
     * @method static \Illuminate\View\ViewFinderInterface getFinder()
     * @see \Illuminate\View\Concerns\ManagesComponents::getConsumableComponentData
     * @method static mixed|null getConsumableComponentData(string $key, $default = null)
     * @see \Illuminate\View\Factory::doneRendering
     * @method static bool doneRendering()
     * @see \Illuminate\View\Concerns\ManagesLoops::addLoop
     * @method static void addLoop(array|\Countable $data)
     * @see \Illuminate\View\Concerns\ManagesLayouts::hasSection
     * @method static bool hasSection(string $name)
     * @see \Illuminate\View\Factory::flushStateIfDoneRendering
     * @method static void flushStateIfDoneRendering()
     * @see \Illuminate\View\Factory::file
     * @method static \Illuminate\Contracts\View\View file(string $path, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\View\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
     * @see \Illuminate\View\Factory::share
     * @method static mixed|string share(array|string $key, mixed|null $value = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::startPush
     * @method static void startPush(string $section, string $content = '')
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPush
     * @method static string stopPush()
     * @see \Illuminate\View\Concerns\ManagesEvents::creator
     * @method static array creator(array|string $views, string $callback)
     * @see \Illuminate\View\Concerns\ManagesEvents::composer
     * @method static array composer(array|string $views, string $callback)
     * @see \Illuminate\View\Concerns\ManagesTranslations::renderTranslation
     * @method static string renderTranslation()
     * @see \Illuminate\View\Factory::addExtension
     * @method static void addExtension(string $extension, string $engine, null $resolver = null)
     * @see \Illuminate\View\Concerns\ManagesLayouts::startSection
     * @method static void startSection(string $section, null|string $content = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPrepend
     * @method static string stopPrepend()
     * @see \Illuminate\View\Factory::flushState
     * @method static void flushState()
     * @see \Illuminate\View\Factory::exists
     * @method static bool exists(string $view)
     * @see \Illuminate\View\Factory::first
     * @method static \Illuminate\Contracts\View\View first(array $views, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::getExtensions
     * @method static array|string[] getExtensions()
     * @see \Illuminate\View\Concerns\ManagesEvents::callCreator
     * @method static void callCreator(\Illuminate\Contracts\View\View $view)
     * @see \Illuminate\View\Factory::getEngineResolver
     * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver()
     * @see \Illuminate\View\Factory::prependNamespace
     * @method static \Illuminate\View\Factory prependNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesFragments::stopFragment
     * @method static string stopFragment()
     * @see \Illuminate\View\Factory::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\View\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\View\Concerns\ManagesLoops::getLastLoop
     * @method static null|object|\stdClass getLastLoop()
     * @see \Illuminate\View\Factory::renderEach
     * @method static string renderEach(string $view, array $data, string $iterator, string $empty = 'raw|')
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldSection
     * @method static string yieldSection()
     * @see \Illuminate\View\Concerns\ManagesLayouts::appendSection
     * @method static string appendSection()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\View\Concerns\ManagesFragments::flushFragments
     * @method static void flushFragments()
     * @see \Illuminate\View\Concerns\ManagesEvents::composers
     * @method static array composers(array $composers)
     * @see \Illuminate\View\Factory::setDispatcher
     * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\View\Concerns\ManagesLayouts::flushSections
     * @method static void flushSections()
     * @see \Illuminate\View\Concerns\ManagesLayouts::parentPlaceholder
     * @method static string parentPlaceholder(string $section = '')
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSection
     * @method static mixed|null|string getSection(string $name, null|string $default = null)
     * @see \Illuminate\View\Concerns\ManagesComponents::slot
     * @method static void slot(string $name, null|string $content = null, array $attributes = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::yieldPushContent
     * @method static string yieldPushContent(string $section, string $default = '')
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponentFirst
     * @method static void startComponentFirst(array $names, array $data = [])
     * @see \Illuminate\View\Factory::make
     * @method static \Illuminate\Contracts\View\View make(string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::markAsRenderedOnce
     * @method static void markAsRenderedOnce(string $id)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\View\Factory::renderWhen
     * @method static string renderWhen(bool $condition, string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::getShared
     * @method static array getShared()
     * @see \Illuminate\View\Concerns\ManagesFragments::startFragment
     * @method static void startFragment(string $fragment)
     * @see \Illuminate\View\Concerns\ManagesLoops::incrementLoopIndices
     * @method static void incrementLoopIndices()
     * @see \Illuminate\View\Concerns\ManagesLoops::popLoop
     * @method static void popLoop()
     * @see \Illuminate\View\Factory::setFinder
     * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder)
     * @see \Illuminate\View\Concerns\ManagesLayouts::inject
     * @method static void inject(string $section, string $content)
     */
    class View {}

    /**
     * @see \Illuminate\Foundation\Vite::withEntryPoints
     * @method static \Illuminate\Foundation\Vite withEntryPoints(array $entryPoints)
     * @see \Illuminate\Foundation\Vite::prefetch
     * @method static \Illuminate\Foundation\Vite prefetch(int|null $concurrency = null, string $event = 'load')
     * @see \Illuminate\Foundation\Vite::useWaterfallPrefetching
     * @method static \Illuminate\Foundation\Vite useWaterfallPrefetching(int|null $concurrency = null)
     * @see \Illuminate\Foundation\Vite::useHotFile
     * @method static \Illuminate\Foundation\Vite useHotFile(string $path)
     * @see \Illuminate\Foundation\Vite::hotFile
     * @method static string hotFile()
     * @see \Illuminate\Foundation\Vite::cspNonce
     * @method static null|string cspNonce()
     * @see \Illuminate\Foundation\Vite::content
     * @method static string content(string $asset, null|string $buildDirectory = null)
     * @see \Illuminate\Foundation\Vite::createAssetPathsUsing
     * @method static \Illuminate\Foundation\Vite createAssetPathsUsing(callable|null $resolver)
     * @see \Illuminate\Foundation\Vite::usePrefetchStrategy
     * @method static \Illuminate\Foundation\Vite usePrefetchStrategy($strategy, array $config = [])
     * @see \Illuminate\Foundation\Vite::useCspNonce
     * @method static string useCspNonce(null|string $nonce = null)
     * @see \Illuminate\Foundation\Vite::useIntegrityKey
     * @method static \Illuminate\Foundation\Vite useIntegrityKey(false|string $key)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Foundation\Vite::useManifestFilename
     * @method static \Illuminate\Foundation\Vite useManifestFilename(string $filename)
     * @see \Illuminate\Foundation\Vite::toHtml
     * @method static string toHtml()
     * @see \Illuminate\Foundation\Vite::preloadedAssets
     * @method static array preloadedAssets()
     * @see \Illuminate\Foundation\Vite::useStyleTagAttributes
     * @method static \Illuminate\Foundation\Vite useStyleTagAttributes($attributes)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Foundation\Vite::useScriptTagAttributes
     * @method static \Illuminate\Foundation\Vite useScriptTagAttributes($attributes)
     * @see \Illuminate\Foundation\Vite::reactRefresh
     * @method static \Illuminate\Support\HtmlString|void reactRefresh()
     * @see \Illuminate\Foundation\Vite::useAggressivePrefetching
     * @method static \Illuminate\Foundation\Vite useAggressivePrefetching()
     * @see \Illuminate\Foundation\Vite::useBuildDirectory
     * @method static \Illuminate\Foundation\Vite useBuildDirectory(string $path)
     * @see \Illuminate\Foundation\Vite::usePreloadTagAttributes
     * @method static \Illuminate\Foundation\Vite usePreloadTagAttributes($attributes)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Foundation\Vite::manifestHash
     * @method static null|string manifestHash(null|string $buildDirectory = null)
     * @see \Illuminate\Foundation\Vite::isRunningHot
     * @method static bool isRunningHot()
     * @see \Illuminate\Foundation\Vite::asset
     * @method static string asset(string $asset, null|string $buildDirectory = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Vite {}
}

namespace Lab404\Impersonate {

    /**
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getSessionGuardUsing
     * @method static string getSessionGuardUsing()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getSessionKey
     * @method static string getSessionKey()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getImpersonatorGuardUsingName
     * @method static null|string getImpersonatorGuardUsingName()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getImpersonatorId
     * @method static int|null getImpersonatorId()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getCurrentAuthGuardName
     * @method static array|null getCurrentAuthGuardName()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::clear
     * @method static void clear()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::take
     * @method static bool take(\Illuminate\Contracts\Auth\Authenticatable $from, \Illuminate\Contracts\Auth\Authenticatable $to, null|string $guardName = null)
     * @see \Lab404\Impersonate\Services\ImpersonateManager::isImpersonating
     * @method static bool isImpersonating()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getSessionGuard
     * @method static string getSessionGuard()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::findUserById
     * @method static \Illuminate\Contracts\Auth\Authenticatable findUserById(int $id, $guardName = null)
     * @see \Lab404\Impersonate\Services\ImpersonateManager::leave
     * @method static bool leave()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getDefaultSessionGuard
     * @method static string getDefaultSessionGuard()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getImpersonator
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null getImpersonator()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getLeaveRedirectTo
     * @method static string getLeaveRedirectTo()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getTakeRedirectTo
     * @method static string getTakeRedirectTo()
     * @see \Lab404\Impersonate\Services\ImpersonateManager::getImpersonatorGuardName
     * @method static null|string getImpersonatorGuardName()
     */
    class Impersonate {}
}

namespace Lahirulhr\PayHere {

    /**
     * @see PayHere::preapproval
     * @method static \Lahirulhr\PayHere\Api\PreApproval preapproval()
     * @see PayHere::charge
     * @method static \Lahirulhr\PayHere\Api\Charge charge()
     * @see PayHere::recurring
     * @method static \Lahirulhr\PayHere\Api\Recurring recurring()
     * @see PayHere::capture
     * @method static \Lahirulhr\PayHere\Api\Capture capture()
     * @see PayHere::retrieve
     * @method static \Lahirulhr\PayHere\Api\Retrieve retrieve()
     * @see PayHere::subscription
     * @method static \Lahirulhr\PayHere\Api\Subscription subscription()
     * @see PayHere::checkOut
     * @method static \Lahirulhr\PayHere\Api\Checkout checkOut()
     * @see PayHere::authorize
     * @method static \Lahirulhr\PayHere\Api\Authorize authorize()
     * @see PayHere::refund
     * @method static \Lahirulhr\PayHere\Api\Refund refund()
     */
    class PayHereFacade {}
}

namespace Spatie\LaravelIgnition\Facades {

    /**
     * @see \Spatie\FlareClient\Flare::applicationPath
     * @method static \Spatie\FlareClient\Flare applicationPath(string $applicationPath)
     * @see \Spatie\FlareClient\Flare::argumentReducers
     * @method static \Spatie\FlareClient\Flare argumentReducers(array|null|\Spatie\Backtrace\Arguments\ArgumentReducers $argumentReducers)
     * @see \Spatie\FlareClient\Flare::registerFlareHandlers
     * @method static \Spatie\FlareClient\Flare registerFlareHandlers()
     * @see \Spatie\FlareClient\Flare::sendTestReport
     * @method static void sendTestReport(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::handleException
     * @method static void handleException(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::setApiToken
     * @method static \Spatie\FlareClient\Flare setApiToken(string $apiToken)
     * @see \Spatie\FlareClient\Flare::registerExceptionHandler
     * @method static \Spatie\FlareClient\Flare registerExceptionHandler()
     * @see \Spatie\FlareClient\Flare::createReportFromMessage
     * @method static \Spatie\FlareClient\Report createReportFromMessage(string $message, string $logLevel)
     * @see \Spatie\FlareClient\Flare::determineVersionUsing
     * @method static \Spatie\FlareClient\Flare determineVersionUsing(callable $determineVersionCallable)
     * @see \Spatie\FlareClient\Flare::setContainer
     * @method static \Spatie\FlareClient\Flare setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Spatie\FlareClient\Flare::reportMessage
     * @method static void reportMessage(string $message, string $logLevel, callable $callback = null)
     * @see \Spatie\FlareClient\Flare::registerMiddleware
     * @method static \Spatie\FlareClient\Flare registerMiddleware(callable|\Spatie\FlareClient\FlareMiddleware\FlareMiddleware|\Spatie\FlareClient\FlareMiddleware\FlareMiddleware[] $middleware)
     * @see \Spatie\FlareClient\Flare::getMiddleware
     * @method static \Spatie\FlareClient\FlareMiddleware\FlareMiddleware[]|string[] getMiddleware()
     * @see \Spatie\FlareClient\Concerns\HasContext::messageLevel
     * @method static \Spatie\FlareClient\Concerns\HasContext messageLevel(null|string $messageLevel)
     * @see \Spatie\FlareClient\Flare::reportErrorLevels
     * @method static \Spatie\FlareClient\Flare reportErrorLevels(int $reportErrorLevels)
     * @see \Spatie\FlareClient\Concerns\HasContext::context
     * @method static \Spatie\FlareClient\Concerns\HasContext context(string $key, $value)
     * @see \Spatie\FlareClient\Flare::getMiddlewares
     * @method static \Spatie\FlareClient\FlareMiddleware\FlareMiddleware[]|string[] getMiddlewares()
     * @see \Spatie\FlareClient\Flare::make
     * @method static \Spatie\FlareClient\Flare make(string $apiKey = null, \Spatie\FlareClient\Context\ContextProviderDetector $contextDetector = null)
     * @see \Spatie\FlareClient\Concerns\HasContext::group
     * @method static \Spatie\FlareClient\Concerns\HasContext group(string $groupName, array $properties)
     * @see \Spatie\FlareClient\Flare::setContextProviderDetector
     * @method static \Spatie\FlareClient\Flare setContextProviderDetector(\Spatie\FlareClient\Context\ContextProviderDetector $contextDetector)
     * @see \Spatie\FlareClient\Flare::filterExceptionsUsing
     * @method static \Spatie\FlareClient\Flare filterExceptionsUsing(callable $filterExceptionsCallable)
     * @see \Spatie\FlareClient\Flare::setStage
     * @method static \Spatie\FlareClient\Flare setStage(null|string $stage)
     * @see \Spatie\FlareClient\Flare::filterReportsUsing
     * @method static \Spatie\FlareClient\Flare filterReportsUsing(callable $filterReportsCallable)
     * @see \Spatie\FlareClient\Concerns\HasContext::getGroup
     * @method static array getGroup(string $groupName = 'context', $default = [])
     * @see \Spatie\FlareClient\Flare::withStackFrameArguments
     * @method static \Spatie\FlareClient\Flare withStackFrameArguments(bool $withStackFrameArguments = true, bool $forcePHPIniSetting = false)
     * @see \Spatie\FlareClient\Flare::reportHandled
     * @method static null|\Spatie\FlareClient\Report reportHandled(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::createReport
     * @method static \Spatie\FlareClient\Report createReport(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::version
     * @method static null|string version()
     * @see \Spatie\FlareClient\Flare::anonymizeIp
     * @method static \Spatie\FlareClient\Flare anonymizeIp()
     * @see \Spatie\FlareClient\Flare::setBaseUrl
     * @method static \Spatie\FlareClient\Flare setBaseUrl(string $baseUrl)
     * @see \Spatie\FlareClient\Flare::apiTokenSet
     * @method static bool apiTokenSet()
     * @see \Spatie\FlareClient\Flare::censorRequestBodyFields
     * @method static \Spatie\FlareClient\Flare censorRequestBodyFields(array $fieldNames)
     * @see \Spatie\FlareClient\Concerns\HasContext::stage
     * @method static \Spatie\FlareClient\Concerns\HasContext stage(null|string $stage)
     * @see \Spatie\FlareClient\Flare::registerErrorHandler
     * @method static \Spatie\FlareClient\Flare registerErrorHandler(int|null $errorLevels = null)
     * @see \Spatie\FlareClient\Flare::handleError
     * @method static mixed handleError($code, string $message, string $file = '', int $line = 0)
     * @see \Spatie\FlareClient\Flare::report
     * @method static null|\Spatie\FlareClient\Report report(\Throwable $throwable, callable $callback = null, \Spatie\FlareClient\Report $report = null, bool|null $handled = null)
     * @see \Spatie\FlareClient\Flare::reset
     * @method static void reset()
     * @see \Spatie\FlareClient\Flare::glow
     * @method static \Spatie\FlareClient\Flare glow(string $name, string $messageLevel = MessageLevels::INFO, array $metaData = [])
     * @see \Spatie\FlareClient\Flare::sendReportsImmediately
     * @method static \Spatie\FlareClient\Flare sendReportsImmediately()
     */
    class Flare {}
}

namespace Srmklive\PayPal\Facades {

    /**
     * @see \Srmklive\PayPal\PayPalFacadeAccessor::getProvider
     * @method static \Srmklive\PayPal\Services\PayPal getProvider()
     * @see \Srmklive\PayPal\PayPalFacadeAccessor::setProvider
     * @method static \Srmklive\PayPal\Services\PayPal setProvider()
     */
    class PayPal {}
}

namespace {
    class Chatify extends Chatify\Facades\ChatifyMessenger {}
    class DNS1D extends Milon\Barcode\Facades\DNS1DFacade {}
    class DNS2D extends Milon\Barcode\Facades\DNS2DFacade {}
    class Debugbar extends Barryvdh\Debugbar\Facades\Debugbar {}
    class Excel extends Maatwebsite\Excel\Facades\Excel {}
    class Flare extends Spatie\LaravelIgnition\Facades\Flare {}
    class Form extends Collective\Html\FormFacade {}
    class GoogleCalendar extends Spatie\GoogleCalendar\GoogleCalendarFacade {}
    class Html extends Collective\Html\HtmlFacade {}
    class Module extends Nwidart\Modules\Facades\Module {}
    class NoCaptcha extends Anhskohbo\NoCaptcha\Facades\NoCaptcha {}
    class PayHere extends Lahirulhr\PayHere\PayHereFacade {}
    class PayPal extends Srmklive\PayPal\Facades\PayPal {}
    class PaytmWallet extends Anand\LaravelPaytmWallet\Facades\PaytmWallet {}
    class Twilio extends Arkitecht\Twilio\Facades\Twilio {}
}
