type LogoProps = {
    small: boolean;
};

export default function ApplicationLogo({small=false}: LogoProps) {
    return (
        <div className={`flex ${small ? "" : "mb-5"} items-end select-none`}>
            <div className={`flex items-center justify-center rounded-xl bg-logo ${small ? "border-[2px]" : "border-[3px]"} border-black shadow-h-neubrutal h-[100%] aspect-square px-1`}>
                <span className={`font-clash-sbol ${small ? "text-2xl" : "text-5xl"} text-white stroke-black`} style={{WebkitTextStroke: `${small ? "1.5px black" : "3px black"}`}}>SS</span>
            </div>
            <div className={`${small ? "w-[14px] h-[14px] mx-[4px] border-[2px]" : "w-[20px] h-[20px] mx-[8px] border-[3px]"} bg-logo border-black shadow-h-neubrutal rounded-full`}></div>
            <div className={`${small ? "text-5xl leading-9" : "h-[68px] text-6xl"} font-clash-sbol text-logo drop-shadow-neubrutal stroke-[3px] stroke-black`} style={{WebkitTextStroke: `${small ? "1.5px black" : "3px black"}`}}>
                lv
            </div>
        </div>
    );
}
