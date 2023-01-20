<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for BusinessProfilePerformance (v1).
 *
 * <p>
 * The Business Profile Performance API allows merchants to fetch performance
 * reports about their business profile on Google. Note - If you have a quota of
 * 0 after enabling the API, please request for GBP API access.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/my-business/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_BusinessProfilePerformance extends Google_Service
{


  public $gbplocations;
  public $gbplocations_searchkeywords_impressions_monthly;

  /**
   * Constructs the internal representation of the BusinessProfilePerformance
   * service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://businessprofileperformance.googleapis.com/';
    $this->servicePath = '';
    // $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'businessprofileperformance';
    $this->gbplocations = new Google_Service_BusinessProfilePerformance_Resource_Locations(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'getDailyMetricsTimeSeries' => array(
              'path' => 'v1/{+name}:getDailyMetricsTimeSeries',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dailyMetric' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dailyRange.endDate.day' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailyRange.endDate.month' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailyRange.endDate.year' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailyRange.startDate.day' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailyRange.startDate.month' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailyRange.startDate.year' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailySubEntityType.dayOfWeek' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dailySubEntityType.timeOfDay.hours' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailySubEntityType.timeOfDay.minutes' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailySubEntityType.timeOfDay.nanos' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dailySubEntityType.timeOfDay.seconds' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->gbplocations_searchkeywords_impressions_monthly = new Google_Service_BusinessProfilePerformance_Resource_LocationsSearchkeywordsImpressionsMonthly(
        $this,
        $this->serviceName,
        'monthly',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1/{+parent}/searchkeywords/impressions/monthly',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'monthlyRange.endMonth.day' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'monthlyRange.endMonth.month' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'monthlyRange.endMonth.year' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'monthlyRange.startMonth.day' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'monthlyRange.startMonth.month' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'monthlyRange.startMonth.year' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}



class Google_Service_BusinessProfilePerformance_Date extends Google_Model
{
  /**
   * @var int
   */
  public $day;
  /**
   * @var int
   */
  public $month;
  /**
   * @var int
   */
  public $year;

  /**
   * @param int
   */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /**
   * @return int
   */
  public function getDay()
  {
    return $this->day;
  }
  /**
   * @param int
   */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /**
   * @return int
   */
  public function getMonth()
  {
    return $this->month;
  }
  /**
   * @param int
   */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /**
   * @return int
   */
  public function getYear()
  {
    return $this->year;
  }
}



class Google_Service_BusinessProfilePerformance_DatedValue extends Google_Model
{
  protected $dateType = 'Google_Service_BusinessProfilePerformance_Date';
  protected $dateDataType = '';
  public $date;
  /**
   * @var string
   */
  public $value;

  /**
   * @param Date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * @param string
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}



class Google_Service_BusinessProfilePerformance_GetDailyMetricsTimeSeriesResponse extends Google_Model
{
  protected $timeSeriesType = 'Google_Service_BusinessProfilePerformance_TimeSeries';
  protected $timeSeriesDataType = '';
  public $timeSeries;

  /**
   * @param TimeSeries
   */
  public function setTimeSeries(TimeSeries $timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /**
   * @return TimeSeries
   */
  public function getTimeSeries()
  {
    return $this->timeSeries;
  }
}



class Google_Service_BusinessProfilePerformance_InsightsValue extends Google_Model
{
  /**
   * @var string
   */
  public $threshold;
  /**
   * @var string
   */
  public $value;

  /**
   * @param string
   */
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  /**
   * @return string
   */
  public function getThreshold()
  {
    return $this->threshold;
  }
  /**
   * @param string
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}



class Google_Service_BusinessProfilePerformance_ListSearchKeywordImpressionsMonthlyResponse extends Google_Collection
{
  protected $collection_key = 'searchKeywordsCounts';
  /**
   * @var string
   */
  public $nextPageToken;
  protected $searchKeywordsCountsType = 'Google_Service_BusinessProfilePerformance_SearchKeywordCount';
  protected $searchKeywordsCountsDataType = 'array';
  public $searchKeywordsCounts;

  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param SearchKeywordCount[]
   */
  public function setSearchKeywordsCounts($searchKeywordsCounts)
  {
    $this->searchKeywordsCounts = $searchKeywordsCounts;
  }
  /**
   * @return SearchKeywordCount[]
   */
  public function getSearchKeywordsCounts()
  {
    return $this->searchKeywordsCounts;
  }
}



class Google_Service_BusinessProfilePerformance_SearchKeywordCount extends Google_Model
{
  protected $insightsValueType = 'Google_Service_BusinessProfilePerformance_InsightsValue';
  protected $insightsValueDataType = '';
  public $insightsValue;
  /**
   * @var string
   */
  public $searchKeyword;

  /**
   * @param InsightsValue
   */
  public function setInsightsValue(InsightsValue $insightsValue)
  {
    $this->insightsValue = $insightsValue;
  }
  /**
   * @return InsightsValue
   */
  public function getInsightsValue()
  {
    return $this->insightsValue;
  }
  /**
   * @param string
   */
  public function setSearchKeyword($searchKeyword)
  {
    $this->searchKeyword = $searchKeyword;
  }
  /**
   * @return string
   */
  public function getSearchKeyword()
  {
    return $this->searchKeyword;
  }
}



class Google_Service_BusinessProfilePerformance_TimeSeries extends Google_Collection
{
  protected $collection_key = 'datedValues';
  protected $datedValuesType = 'Google_Service_BusinessProfilePerformance_DatedValue';
  protected $datedValuesDataType = 'array';
  public $datedValues;

  /**
   * @param DatedValue[]
   */
  public function setDatedValues($datedValues)
  {
    $this->datedValues = $datedValues;
  }
  /**
   * @return DatedValue[]
   */
  public function getDatedValues()
  {
    return $this->datedValues;
  }
}




/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $businessprofileperformanceService = new Google\Service\BusinessProfilePerformance(...);
 *   $locations = $businessprofileperformanceService->locations;
 *  </code>
 */
class Google_Service_BusinessProfilePerformance_Resource_Locations extends Google_Service_Resource
{
  /**
   * Returns the values for each date from a given time range that are associated
   * with the specific daily metric. Example request: `GET https://businessprofile
   * performance.googleapis.com/v1/locations/12345:getDailyMetricsTimeSeries?daily
   * Metric=WEBSITE_CLICKS_range.start_date.year=2022_range.start_date.month=1_ran
   * ge.start_date.day=1_range.end_date.year=2022_range.end_date.month=3_range.end
   * _date.day=31` (locations.getDailyMetricsTimeSeries)
   *
   * @param string $name Required. The location for which the time series should
   * be fetched. Format: locations/{location_id} where location_id is an
   * unobfuscated listing id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dailyMetric Required. The metric to retrieve time series.
   * @opt_param int dailyRange.endDate.day Day of a month. Must be from 1 to 31
   * and valid for the year and month, or 0 to specify a year by itself or a year
   * and month where the day isn't significant.
   * @opt_param int dailyRange.endDate.month Month of a year. Must be from 1 to
   * 12, or 0 to specify a year without a month and day.
   * @opt_param int dailyRange.endDate.year Year of the date. Must be from 1 to
   * 9999, or 0 to specify a date without a year.
   * @opt_param int dailyRange.startDate.day Day of a month. Must be from 1 to 31
   * and valid for the year and month, or 0 to specify a year by itself or a year
   * and month where the day isn't significant.
   * @opt_param int dailyRange.startDate.month Month of a year. Must be from 1 to
   * 12, or 0 to specify a year without a month and day.
   * @opt_param int dailyRange.startDate.year Year of the date. Must be from 1 to
   * 9999, or 0 to specify a date without a year.
   * @opt_param string dailySubEntityType.dayOfWeek Represents the day of the
   * week. Eg: MONDAY.
   * @opt_param int dailySubEntityType.timeOfDay.hours Hours of day in 24 hour
   * format. Should be from 0 to 23. An API may choose to allow the value
   * "24:00:00" for scenarios like business closing time.
   * @opt_param int dailySubEntityType.timeOfDay.minutes Minutes of hour of day.
   * Must be from 0 to 59.
   * @opt_param int dailySubEntityType.timeOfDay.nanos Fractions of seconds in
   * nanoseconds. Must be from 0 to 999,999,999.
   * @opt_param int dailySubEntityType.timeOfDay.seconds Seconds of minutes of the
   * time. Must normally be from 0 to 59. An API may allow the value 60 if it
   * allows leap-seconds.
   * @return GetDailyMetricsTimeSeriesResponse
   */
  public function getDailyMetricsTimeSeries($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    debug($params);
    return $this->call('getDailyMetricsTimeSeries', array($params), 'Google_Service_BusinessProfilePerformance_GetDailyMetricsTimeSeriesResponse');
  }
}




/**
 * The "searchkeywords" collection of methods.
 * Typical usage is:
 *  <code>
 *   $businessprofileperformanceService = new Google\Service\BusinessProfilePerformance(...);
 *   $searchkeywords = $businessprofileperformanceService->locations_searchkeywords;
 *  </code>
 */
class Google_Service_BusinessProfilePerformance_Resource_LocationsSearchkeywords extends Google_Service_Resource
{
}




/**
 * The "impressions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $businessprofileperformanceService = new Google\Service\BusinessProfilePerformance(...);
 *   $impressions = $businessprofileperformanceService->locations_searchkeywords_impressions;
 *  </code>
 */
class Google_Service_BusinessProfilePerformance_Resource_LocationsSearchkeywordsImpressions extends Google_Service_Resource
{
}




/**
 * The "monthly" collection of methods.
 * Typical usage is:
 *  <code>
 *   $businessprofileperformanceService = new Google\Service\BusinessProfilePerformance(...);
 *   $monthly = $businessprofileperformanceService->locations_searchkeywords_impressions_monthly;
 *  </code>
 */
class Google_Service_BusinessProfilePerformance_Resource_LocationsSearchkeywordsImpressionsMonthly extends Google_Service_Resource
{
  /**
   * Returns the search keywords used to find a business in search or maps. Each
   * search keyword is accompanied by impressions which are aggregated on a
   * monthly basis. Example request: `GET https://businessprofileperformance.googl
   * eapis.com/v1/locations/12345/searchkeywords/impressions/monthly?monthly_range
   * .start_month.year=2022_range.start_month.month=1_range.end_month.year=2022_ra
   * nge.end_month.month=3`
   * (monthly.listLocationsSearchkeywordsImpressionsMonthly)
   *
   * @param string $parent Required. The location for which the time series should
   * be fetched. Format: locations/{location_id} where location_id is an
   * unobfuscated listing id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int monthlyRange.endMonth.day Day of a month. Must be from 1 to 31
   * and valid for the year and month, or 0 to specify a year by itself or a year
   * and month where the day isn't significant.
   * @opt_param int monthlyRange.endMonth.month Month of a year. Must be from 1 to
   * 12, or 0 to specify a year without a month and day.
   * @opt_param int monthlyRange.endMonth.year Year of the date. Must be from 1 to
   * 9999, or 0 to specify a date without a year.
   * @opt_param int monthlyRange.startMonth.day Day of a month. Must be from 1 to
   * 31 and valid for the year and month, or 0 to specify a year by itself or a
   * year and month where the day isn't significant.
   * @opt_param int monthlyRange.startMonth.month Month of a year. Must be from 1
   * to 12, or 0 to specify a year without a month and day.
   * @opt_param int monthlyRange.startMonth.year Year of the date. Must be from 1
   * to 9999, or 0 to specify a date without a year.
   * @opt_param int pageSize Optional. The number of results requested. The
   * default page size is 100. Page size can be set to a maximum of 100.
   * @opt_param string pageToken Optional. A token indicating the next paginated
   * result to be returned.
   * @return ListSearchKeywordImpressionsMonthlyResponse
   */
  public function listLocationsSearchkeywordsImpressionsMonthly($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google_Service_BusinessProfilePerformance_ListSearchKeywordImpressionsMonthlyResponse');
  }
}

