<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class AdvertisementFilter extends AbstractFilter
{
    public const CATEGORY_ID = 'category_id';
    public const IMAGES = 'images';
    public const AD_TEXT = 'ad_text';
    public const EMPLOYER_STATUS = 'employer_status';
    public const LIKELY_EDUCATION = 'likely_education';
    public const EDUCATION_PROGRAM = 'education_program';
    public const LANGUAGE_SKILLS = 'language_skills';
    public const WORKING_HOURS = 'working_hours';
    public const WORK_SCHEDULE = 'work_schedule';
    public const WORKING_DAYS = 'working_days';
    public const WORK_EXPERIENCE = 'work_experience';
    public const AGE = 'age';
    public const PRICE_MIN = 'price_min';
    public const PRICE_MAX = 'price_max';
    public const PRICE_ORDER = 'price_order';
    public const PVN = 'pvn';
    public const DEAL_TYPE = 'deal_type';
    public const BRAND = 'brand';
    public const MODEL = 'model';
    public const ENGINE_CAPACITY_MIN = 'engine_capacity_min';
    public const ENGINE_CAPACITY_MAX = 'engine_capacity_max';
    public const ENGINE_TYPE = 'engine_type';
    public const CAR_MILEAGE = 'car_mileage';
    public const CAR_BODY_TYPE = 'car_body_type';
    public const YEAR_MIN = 'year_min';
    public const YEAR_MAX = 'year_max';
    public const YEAR_ORDER = 'year_order';
    public const CAR_GEARBOX = 'car_gearbox';
    public const GEAR_COUNT = 'gear_count';
    public const COLOUR = 'colour';
    public const COLOUR_METALLIC = 'colour_metallic';
    public const VIN = 'vin';
    public const NUMBER_PLATE = 'number_plate';
    public const VEHICLE_OPTIONS = 'vehicle_options';
    public const NEW_CAR_BOUGHT_IN_LATVIA = 'new_car_bought_in_latvia';
    public const ROOM_COUNT = 'room_count';
    public const AREA = 'area';
    public const BUILDING_SERIES = 'building_series';
    public const BUILDING_TYPE = 'building_type';
    public const CASTRATE_NUMBER = 'castrate_number';
    public const FLOOR = 'floor';
    public const MAX_FLOOR = 'max_floor';
    public const ELEVATOR = 'elevator';
    public const CONVENIENCE_OPTIONS = 'convenience_options';
    public const PHONE = 'phone';
    public const SECOND_PHONE = 'second_phone';
    public const EMAIL = 'email';
    public const WWW = 'www';
    public const PDF_FILE_ID = 'pdf_file_id';
    public const LOCATION = 'location';
    public const ADDRESS = 'address';
    public const PLACE_OF_LIVING = 'place_of_living';
    public const ENDING_DATE = 'ending_date';
    public const VIEWS = 'views';
    public const STATUS = 'status';

    protected function getCallbacks(): array
    {
        return [
            self::PRICE_MIN => [$this, 'price_min'],
            self::PRICE_MAX => [$this, 'price_max'],
            self::PRICE_ORDER => [$this, 'price_order'],
            self::YEAR_MIN => [$this, 'year_min'],
            self::YEAR_MAX => [$this, 'year_max'],
            self::YEAR_ORDER => [$this, 'year_order'],
            self::ENGINE_CAPACITY_MIN => [$this, 'engine_capacity_min'],
            self::ENGINE_CAPACITY_MAX => [$this, 'engine_capacity_max'],
            self::ENGINE_TYPE => [$this, 'engine_type'],
            self::CAR_GEARBOX => [$this, 'car_gearbox'],
            self::CAR_BODY_TYPE => [$this, 'car_body_type'],
            self::COLOUR => [$this, 'colour'],
            self::LOCATION => [$this, 'location'],
            self::DEAL_TYPE => [$this, 'deal_type'],
            self::MODEL => [$this, 'model'],
        ];
    }

    public function price_min(Builder $builder, $value): void
    {
        $builder->where('price', '>', $value);
    }
    public function price_max(Builder $builder, $value): void
    {
        $builder->where('price', '<', $value);
    }
    public function price_order(Builder $builder, $value): void
    {
        $builder->orderBy('price', $value);
    }
    public function year_min(Builder $builder, $value): void
    {
        $builder->where('car_manufacturing_year', '>', $value);
    }
    public function year_max(Builder $builder, $value): void
    {
        $builder->where('car_manufacturing_year', '<', $value);
    }
    public function year_order(Builder $builder, $value): void
    {
        $builder->orderBy('car_manufacturing_year', $value);
    }
    public function engine_capacity_min(Builder $builder, $value): void
    {
        $builder->where('engine_capacity', '>', $value);
    }
    public function engine_capacity_max(Builder $builder, $value): void
    {
        $builder->where('engine_capacity', '<', $value);
    }
    public function engine_type(Builder $builder, $value): void
    {
        $builder->where('engine_type', $value);
    }
    public function car_gearbox(Builder $builder, $value): void
    {
        $builder->where('car_gearbox', $value);
    }
    public function car_body_type(Builder $builder, $value): void
    {
        $builder->where('car_body_type', $value);
    }
    public function colour(Builder $builder, $value): void
    {
        $builder->where('colour', $value);
    }
    public function location(Builder $builder, $value): void
    {
        $builder->where('location', $value);
    }
    public function deal_type(Builder $builder, $value): void
    {
        $builder->where('deal_type', $value);
    }
    public function model(Builder $builder, $value): void
    {
        $builder->where('model', $value);
    }
}
