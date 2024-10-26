import Input from '@/Components/Input';
import Label from '@/Components/Label';
import Button from '@/Components/Button';
import {Link, Head} from '@inertiajs/inertia-react';

export default function Login(){
    return (
        <>
           <Head title="Sign In" />
            <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
                <div class="fixed top-[-50px] hidden lg:block">
                    <img
                        src="/images/signup-image.png"
                        class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]"
                        alt=""
                    />
                </div>
                <div class="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
                    <div>
                        <img src="/images/moonton-white.svg" alt="" />
                        <div class="my-[70px]">
                            <div class="font-semibold text-[26px] mb-3">
                                Welcome Back
                            </div>
                            <p class="text-base text-[#767676] leading-7">
                                Explore our new movies and get <br />
                                the better insight for your life
                            </p>
                        </div>
                        <form class="w-[370px]">
                            <div class="flex flex-col gap-6">
                                <div>
                                    <Label
                                        forInput="email"
                                        value="Email Address"
                                    />
                                    <Input
                                        type="email"
                                        name="email"
                                        placeholder="Email Address"
                                    />
                                </div>
                                <div>
                                    <Label
                                        forInput="password"
                                        value="Password"
                                    />
                                    <Input
                                        type="password"
                                        name="password"
                                        placeholder="Password"
                                    />
                                </div>
                            </div>
                            <div class="grid space-y-[14px] mt-[30px]">
                                <Link href={route("prototype.dashboard")}>
                                    <Button type="button" variant="primary">
                                        <span class="text-base font-semibold">
                                            Start Watching
                                        </span>
                                    </Button>
                                </Link>
                                <Link href={route("prototype.register")}>
                                    <Button
                                        type="button"
                                        variant="light-outline"
                                    >
                                        <span class="text-base text-white">
                                            Create New Account
                                        </span>
                                    </Button>
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </>
    );
}