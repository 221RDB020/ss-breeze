import {Link} from "@inertiajs/react";

export default function HomeSection() {
    return (
        <section className="relative flex lg:justify-between min-h-[90dvh] lg:h-[80dvh] lg:px-24 sm:px-10 px-5">
            <div className="mt-12 lg:mt-20">
                <h2 className="text-black font-clash-sbol text-clamp-6xl tracking-wide max-w-[590px] lg:max-w-[684px]">
                    Lielākais Sludinājumu portāls <span className="text-accent">Baltijā</span>
                </h2>
                <p className="text-text font-clash-reg text-clamp-2xl mt-6 mb-12 leading-[175%] w-[100%] lg:w-[660px]">
                    Ieplūsti tajā sludinājumu jūrā, kurā var atrast visu! Regģistrējies tagad un pievieno savu sludinājumu vai sāc pētīt, kas ir pieejams tieši Tev!
                </p>
                <Link href={route('register')} className={`text-black font-clash-sbol text-clamp-2xl py-4 px-11 bg-accent rounded-xl border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100`}>
                    Regģistrēties
                </Link>
            </div>
            <div className="w-[50vw] hidden sm:block lg:w-[715px] absolute lg:relative lg:right-0 lg:bottom-0 right-10 bottom-20">
                <img src='images/illustration.png' alt="illustration"/>
            </div>
        </section>
    );
}
