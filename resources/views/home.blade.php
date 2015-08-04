@extends('master')

@section('body')
    <section id="header">
        <div class="row">
            <div class="small-12 medium-6 large-push-6">
                <h1>Writing Notebook</h1>

                <p class="tag-line">
                    Freeing the Voices in My Head
                </p>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-12">
                <ul class="quote-orbit" data-orbit>
                    <li  class="active">
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "you can, you should, and if you're brave enough to start, you will."
                            - Stephen King, On Writing: A Memoir of the Craft
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Imagination is like a muscle. I found out that the more I wrote, the bigger it got."
                            - Philip Jose Farmer
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Fantasy is hardly an escape from reality. It's a way of understanding it."
                            - Lloyd Alexander
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "You can make anything by writing."
                            - C.S. Lewis
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "There is nothing to writing. All you do is sit down at a typewriter and bleed."
                            - Ernest Hemingway
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Writing is a socially acceptable form of schizophrenia."
                            - E.L. Doctorow
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Start writing, no matter what. The water does not flow until the faucet is turned on."
                            - Louis L'Amour
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Being a writer is a very peculiar sort of a job: it's always you versus a blank sheet of
                            paper (or a blank screen) and quite often the blank piece of paper wins."
                            - Neil Gaiman
                        </p>
                    </li>
                    <li>
                        <img src={{ url('images/quote.jpg') }} alt=""/>
                        <p  class="orbit-caption">
                            "Ordinary life is pretty complex stuff."
                            - Harvey Pekar
                        </p>
                    </li>


                </ul>
            </div>
        </div>

    </section>
    <section id="about">

    </section>
    <section id="footer">

    </section>
@endsection