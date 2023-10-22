import {Link} from "@inertiajs/react";
import * as Icons from "@mui/icons-material";

type Category = {
    id: number;
    name: string;
    url: string;
    icon: keyof typeof Icons;
};

type MainCategoriesSectionProps = {
    categories: Category[];
};

export default function MainCategoriesSection({categories}: MainCategoriesSectionProps) {
    return (
        <section className="flex flex-col bg-secondary min-h-[83dvh] border-b-[3px] border-black">
            <div className="flex justify-center items-center w-full bg-white h-24 border-t-[3px] border-b-[3px] border-black">
                <h4 className="text-black font-clash-sbol text-clamp-4xl">Visas kategorijas</h4>
            </div>
            <div className="grid gap-12 lg:mx-24 md:grid-cols-2 lg:grid-cols-3 grid-cols-1 my-24 sm:mx-10 mx-5">
                {categories.map((category) => {
                    const IconComponent = Icons[category.icon];

                    return (
                        <div key={category.id} className="flex text-xl font-medium rounded-xl text-black bg-white h-20 border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">
                            <Link href={route('category.show', { category: category.url })} className="relative flex items-center justify-center px-2 pb-0.5 w-full font-clash-med text-clamp-2xl">
                                <IconComponent sx={{fontSize:48}} className={`absolute left-4`}/>
                                <span>
                                    {category.name}
                                </span>
                            </Link>
                        </div>
                    );
                })}
            </div>
        </section>
    );
}
