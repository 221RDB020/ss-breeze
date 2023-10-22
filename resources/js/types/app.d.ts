export type Advertisement = {
    id: number;
    ad_text: string;
    model: string;
    car_manufacturing_year: number;
    engine_capacity: number;
    car_mileage: number;
    price: number;
    brand: string;
    engine_type: number;
    car_gearbox: number;
    car_body_type: number;
    gear_count: number;
    technical_inspection: string;
    colour: string;
    vin: string;
    number_plate: string;
    phone: string;
    location: string;
    created_at: string;
    views: number;
    vehicle_options: string;
};

export type Category = {
    id: number;
    name: string;
    url: string;
    categoryHead: string;
    hasChildren: boolean;
    advertisementCount: number;
};
