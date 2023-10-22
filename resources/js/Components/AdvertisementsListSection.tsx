import Router from "@/Components/Router";
import AdsTable from "@/Components/AdsTable";
import {Advertisement, Category} from "@/types/app";

type PageProps = {
    category: Category;
    subcategory: Category;
    subcategory2?: Category|null;
    advertisements: Advertisement[];
};

export default function AdvertisementsListSection({category, subcategory, subcategory2, advertisements}: PageProps) {
    return (
        <section className="flex flex-col min-h-[90dvh] border-b-[3px] lg:min-h-[80dvh] lg:px-24 sm:px-10 px-0">
            <Router category={category} subcategory={subcategory} subcategory2={subcategory2} />
            <AdsTable category={category} subcategory={subcategory} subcategory2={subcategory2} advertisements={advertisements}/>
        </section>
    );
}
