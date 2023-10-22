import HomeIcon from '@mui/icons-material/Home';
import KeyboardArrowRightRoundedIcon from '@mui/icons-material/KeyboardArrowRightRounded';
import {Link} from "@inertiajs/react";

type Category = {
    id: number;
    name: string;
    url: string;
    categoryHead: string;
    hasChildren: boolean;
    advertisementCount: number;
};

type RouterProps = {
    category: Category,
    subcategory?: Category|null,
    subcategory2?: Category|null
};

export default function Router({category, subcategory, subcategory2}: RouterProps) {
    return (
        <div className="flex h-12 md:bg-white md:rounded-xl md:border-[3px] border-black md:shadow-neubrutal mt-2">
            <div className="flex ml-1 md:ml-3 items-center text-clamp-2xl">
                <Link href={ route('category.index') } className={`flex p-1`}>
                    <HomeIcon fontSize={`inherit`}/>
                </Link>
                <KeyboardArrowRightRoundedIcon className={`mx-1`}/>
                <Link href={ route('category.show', {category: category.url}) } className="font-clash-reg text-clamp-2xl text-black leading-4">
                    {category.name}
                </Link>
                <KeyboardArrowRightRoundedIcon className={`mx-1`}/>
                {subcategory && (
                    <>
                        <Link
                            href={
                                subcategory.hasChildren
                                    ? route('subcategory.index', { category: category.url, subcategory: subcategory.url })
                                    : route('advertisement.index', { category: category.url, subcategory: subcategory.url })
                            }
                            className="font-clash-reg text-clamp-2xl text-black leading-4"
                        >
                            {subcategory.name}
                        </Link>
                        <KeyboardArrowRightRoundedIcon className={`mx-1`} />
                    </>
                )}
                {
                    (subcategory2 && subcategory) &&
                    <>
                        <Link href={ route('_advertisement.index', {category: category.url, subcategory: subcategory.url, _subcategory: subcategory2.url}) }
                              className="font-clash-reg text-clamp-2xl text-black leading-4">
                            {subcategory2.name}
                        </Link>
                        <KeyboardArrowRightRoundedIcon className={`mx-1`}/>
                    </>
                }
            </div>
        </div>
    );
}
